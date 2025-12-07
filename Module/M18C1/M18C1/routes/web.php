<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/get_products', [ProductController::class, 'index']);
Route::get('/get_order', [ProductController::class, 'order']);
