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
        Schema::create('TMaisonTypePieces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maison_id')->nullable()->index();
            $table->foreignId('type_piece_id')->nullable()->index();
            $table->integer('nombre_piece')->default(1);
            $table->string('dimension')->nullable();
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TMaisonTypePieces');
    }
};
