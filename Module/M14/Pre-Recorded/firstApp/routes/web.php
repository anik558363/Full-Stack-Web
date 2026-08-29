<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/',[UserController::class, 'homePage']);

// Route::get('/panda',[UserController::class, 'sayHello']);



// Route::post('/login',[UserController::class, 'login']);




