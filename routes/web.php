<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogController;

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login/session', [AuthController::class, 'getSessionCode'])->name('login_session_code');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login_post'])->name('login');

// web.php
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/logs', [LogController::class, 'index'])->name('logs');