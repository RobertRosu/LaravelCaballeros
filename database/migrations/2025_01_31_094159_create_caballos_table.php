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
        Schema::create('caballos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('color', ['blanco', 'negro', 'naranja', 'marron', 'otro']);
            $table->integer('edad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caballos');
    }
};
