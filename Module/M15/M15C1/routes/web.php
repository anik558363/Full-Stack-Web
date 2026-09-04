<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;




Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/', function () {
    return view('home');
});


Route::get('/products', function () {
    return view('products.product');
});


Route::get('/test', [TestController::class, 'test']);

