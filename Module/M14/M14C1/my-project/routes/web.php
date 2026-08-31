<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {

    $a = 10;

    $b = 10;

    return $a + $b;
});



Route::get('/about', function () {

    return "Hello, I am a Laravel Developer";
});
