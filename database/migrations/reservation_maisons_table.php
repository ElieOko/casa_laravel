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
        Schema::create('TReservationMaisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maison_id')->nullable()->index();
            $table->foreignId('user_id')->nullable()->index();
            $table->date("date_reservation")->default("");
            $table->string("heure_reserver")->default("");
            $table->string("plage_heure_debut")->default("");
            $table->string("plage_heure_fin")->default("");
            $table->boolean("is_reserved")->default(false);
            $table->boolean("is_active")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TReservationMaisons');
    }
};
