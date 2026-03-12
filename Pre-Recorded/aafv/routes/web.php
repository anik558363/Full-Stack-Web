<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



// Home page

Route::get('/', [AuthController::class, 'index'])->name('home');



// Registration
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');



// Login
Route::get('/post', [AuthController::class, 'showPostForm'])->name('post.form');
Route::post('/post', [AuthController::class, 'post'])->name('post');




// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::delete('/post/{id}', [AuthController::class, 'deletePost'])->name('post.delete')->middleware('auth');
