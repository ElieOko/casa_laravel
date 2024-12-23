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
        Schema::create('TMaisonZoneGeographiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maison_id')->nullable()->index();
            $table->foreignId('province_id')->nullable()->index();
            $table->foreignId('ville_id')->nullable()->index();          
            $table->string('commune')->nullable();
            $table->string('avenue');
            $table->string('quartier');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TMaisonZoneGeographiques');
    }
};
