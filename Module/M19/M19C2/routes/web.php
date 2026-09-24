<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/oneToOne', [TestController::class, 'oneToOne']);


Route::get('/onToMany', [TestController::class, 'onToMany']);