<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'homePage']);
// Route::get('/panda', [UserController::class, 'sayHello']);
// Route::get('/panda/{id}', [UserController::class, 'sayHelloRequest']);



// Route::post('/login', [UserController::class, 'loginPage']);

