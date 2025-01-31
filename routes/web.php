<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaballeroController;
use App\Http\Controllers\CaballoController;
use App\Http\Controllers\EscuderoController;
use App\Http\Controllers\CastilloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resources
    Route::resource('caballero', CaballeroController::class);
    Route::resource('caballo', CaballoController::class);
    Route::resource('escudero', EscuderoController::class);
    Route::resource('castillo', CastilloController::class);
});

require __DIR__.'/auth.php';
