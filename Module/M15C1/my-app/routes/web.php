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


// Cookie
Route::get('setCookie', [TestController::class, 'setCookie']);
Route::get('getCookie', [TestController::class, 'getCookie']);
Route::get('deleteCookie', [TestController::class, 'deleteCookie']);


// Session
Route::get('setSession', [TestController::class, 'setSession']);
Route::get('getSession', [TestController::class, 'getSession']);
Route::get('deletedSession', [TestController::class, 'deletedSession']);
Route::get('flushSession', [TestController::class, 'flushSession']);


// Custom Header
Route::get('withCusomHeader', [TestController::class, 'withCusomHeader']);



Route::get('idAddress', [TestController::class, 'idAddress']);



Route::get('/viewTest', function() {
    return view('Hello');
});


// Route::get('/Products', function() {
//     return view('Products/productTest');
// });


Route::get('/Products', function() {
    return view('Products.productTest');
});



// Controller View Route
Route::get('viewTestByController', [TestController::class, 'viewTestByController']);



// home page route
Route::get('/home', function() {
    return view('layouts.home');
});


// about page route
Route::get('/about', function() {
    return view('layouts.about');
});
