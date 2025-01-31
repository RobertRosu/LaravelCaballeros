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
        Schema::create('caballero_castillo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_caballero')->references('id')->on('caballeros')->onDelete('cascade');
            $table->foreignId('id_castillo')->references('id')->on('castillos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caballero_castillo');
    }
};
