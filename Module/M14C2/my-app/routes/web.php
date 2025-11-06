<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/response', function () {
//     return "hello laravel";
// });



// Route::get('/response', function () {
//     return 100;
// });


// Route::get('/response', function () {
//     return true;
// });



Route::get('/response', function () {
    return false;
});



Route::get('sumOfTwoNumbers', [TestController::class, 'sumOfTwoNumbers']);
Route::get('responseTest', [TestController::class, 'responseTest'])->name('response.test');
Route::get('redrectToExternalUrl', [TestController::class, 'redrectToExternalUrl']);
Route::get('redirectToInternalUrl', [TestController::class, 'redirectToInternalUrl']);
Route::get('returnFile', [TestController::class, 'returnFile']);
Route::get('downloadFile', [TestController::class, 'downloadFile']);
