<?php

use App\Http\Controllers\LearnQueryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/learn', [LearnQueryController::class, 'learn'])->name('learn');
