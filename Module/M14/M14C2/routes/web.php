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
Route::get('/responseTest', [TestController::class, 'responseTest'])->name('response.test');
Route::get('/redirect', [TestController::class, 'redircetToExternalUrl']);
Route::get('/redirectInternal', [TestController::class, 'redirectToInternalUrl']);

Route::get('/fileReturn', [TestController::class, 'fileReturn']);

Route::get('/fileReturn', [TestController::class, 'fileReturn']);

Route::get('/pdfFileReturn', [TestController::class, 'pdfFileReturn']);


Route::get('/downloadFile', [TestController::class, 'downloadFile']);

Route::get('/setcookie', [TestController::class, 'setcookie']);


Route::get('/getcookie', [TestController::class, 'getcookie']);

Route::get('/deletecookie', [TestController::class, 'deleteCookie']);

Route::get('/sessionSet', [TestController::class, 'sessionSet']);

Route::get('/sessionGet', [TestController::class, 'sessionGet']);
Route::get('/sessionDelete', [TestController::class, 'sessionDelete']);

Route::get('/sessionFlush', [TestController::class, 'sessionFlush']);

