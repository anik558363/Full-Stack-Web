<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/response', function(){

    return true;

});



Route::get('/sumOfNumber', [TestController::class, 'sumOfTwoNumber']);
Route::get('/responseTest', [TestController::class, 'responseTest']);

