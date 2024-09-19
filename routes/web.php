<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeasiswaController::class, 'index'])->name('beasiswa.index');
Route::get('/beasiswa/{id}', [BeasiswaController::class, 'show'])->name('beasiswa.show');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');