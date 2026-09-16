<?php

use App\Http\Controllers\EloquentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/learn-orm', [EloquentController::class, 'learn'])->name('learn');
