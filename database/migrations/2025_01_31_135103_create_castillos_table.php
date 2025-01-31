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
        Schema::create('castillos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('numero_habitantes');
            $table->enum('reino', ['Reino 1', 'Reino 2', 'Reino 3', 'Reino 4']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('castillos');
    }
};
