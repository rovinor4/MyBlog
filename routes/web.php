<?php

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, "LoginPage"])->name('login');
Route::post('/login', [AuthController::class, "LoginProses"])->name('login_proses');


Route::get('/', [LandingController::class, "index"])->name('home');
Route::get('/artikel', [LandingController::class, "artikel"])->name('artikelLanding');


Route::middleware('auth')->prefix('/admin')->group(function () {
    Route::resource('artikel', ArtikelController::class);
});
