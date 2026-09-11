<?php

use App\Http\Controllers\LearnQueryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/learn', [LearnQueryController::class, 'learn'])->name('learn');
