<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [UserController::class, 'register'])->middleware(['throttle:5, 1']);

Route::post('/getProfile', [UserController::class, 'getProfile'])->middleware(AuthMiddleware::class);

Route::post('/fileUploade', [UserController::class, 'fileUploade']);


