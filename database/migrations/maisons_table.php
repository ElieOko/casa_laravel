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
        Schema::create('TMaisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('maison_type_id')->nullable()->index();
            $table->foreignId('material_build_id')->nullable()->index();
            $table->foreignId('type_architectural_id')->nullable()->index();
            $table->foreignId('devise_id')->nullable()->index();
            $table->decimal('prix',15,4);
            $table->integer('piece')->default(1);
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TMaisons');
    }
};
