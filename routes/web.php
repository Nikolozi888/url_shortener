<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UserController;

Route::get('/', [UrlController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login/store', [SessionsController::class, 'store'])->name('login.store');
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [SessionsController::class, 'destroy'])->name('logout');
    Route::post('/shorten', [UrlController::class, 'store'])->name('shorten.store');
    Route::get('/{shortCode}', [UrlController::class, 'show'])->name('shortcode');
});
