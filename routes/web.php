<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

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
});

Route::controller(PetController::class)->group(function () {
    Route::get('pets', 'index')->name('pets.index');
    Route::get('pets/{pet}', 'show')->name('pets.show')->whereNumber('pet');
});

require __DIR__.'/auth.php';
