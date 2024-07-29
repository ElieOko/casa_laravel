<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('TClients', function (Blueprint $table) {
            $table->id();
            $table->string('nom_famille');
            $table->string('prenom');
            $table->string('genre');
            $table->date('date_naissance');
            $table->string('telephone')->nullable();
            $table->string('image_profil')->nullable();
            $table->foreignId('user_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TClients');
    }
};
