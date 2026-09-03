<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');


Route::post('/login', [App\Http\Controllers\FrontendController::class, 'login'])->name('login.post');
