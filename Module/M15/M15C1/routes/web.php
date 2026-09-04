<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;




Route::get('/', function () {
    return view('hello');
});



Route::get('/products', function () {
    return view('products.product');
});


Route::get('/test', [TestController::class, 'test']);

