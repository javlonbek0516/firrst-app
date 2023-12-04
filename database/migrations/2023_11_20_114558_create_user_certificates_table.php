<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('user_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('link_certificate');
            $table->string('image_certificate');
            $table->string('company_certificate');
            $table->date('date_reached');
            $table->string('expire_date');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('user_certificates');
    }
};
