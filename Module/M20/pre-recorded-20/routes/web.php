<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::get('/', [AuthController::class, 'homePage'])->name('home');
