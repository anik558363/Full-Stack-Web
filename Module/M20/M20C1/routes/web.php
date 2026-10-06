<?php

use App\Http\Controllers\CustomUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/custom-login', [CustomUserController::class, 'showLoginForm'])->name('custom.login');
Route::post('/custom-login/submit', [CustomUserController::class, 'loginSubmit'])->name('custom.login.submit');

Route::get('/custom-dashboard', function () {
    return view('custom_auth.dashboard');
})->name('custom.dashboard');
