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
        Schema::create('TMaisonDimensions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maison_id')->nullable()->index();
            $table->decimal('largeur',10,2);
            $table->decimal('longueur',10,2);
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TMaisonDimensions');
    }
};
