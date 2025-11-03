<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function(){

    $a = 20;
    $b = 30;

    return $a + $b;

});


Route::get('/about', function(){
    echo "this about";
});



