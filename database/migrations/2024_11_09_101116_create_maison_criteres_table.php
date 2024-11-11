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
        Schema::create('TMaisonCriteres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maison_id')->nullable()->index();
            $table->foreignId('critere_id')->nullable()->index();
            $table->string("note")->default("");
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TMaisonCriteres');
    }
};
