<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return "Yes, i am Panda!";
});



Route::get('/sayHello',[UserController::class, 'sayHello']);
