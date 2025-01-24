<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, "LoginPage"])->name('login');
Route::post('/login', [AuthController::class, "LoginProses"])->name('login_proses');

// Route::get('dashboard')->middleware('auth');
