<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portofolio_2555301091', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_title');
            $table->text('about')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('photo')->nullable();

            // Kolom simpan data array dinamis
            $table->json('education')->nullable();
            $table->json('experience')->nullable();
            $table->json('projects')->nullable();
            $table->json('skills')->nullable();
            $table->json('languages')->nullable();
            $table->json('interests')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portofolio_2555301091');
    }
};
