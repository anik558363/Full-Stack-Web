<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/users', function (Request $request) {


    // One-to-One Eloquent Relationship।

    // return DB::table('users')
    //     ->where('users.id', 1)
    //     ->join('profiles', 'users.id', '=', 'profiles.user_id')
    //     ->select('users.*', 'profiles.bio', 'profiles.avatar')->first();

    Log::channel('anik')->info('This is an info log', [
        $request,
        'user-agent' => $request->header('user-agent'),
        'ip' => $request->ip(),
        'url' => $request->uri(),
        'method' => $request->method()
    ]);



    // Log::error('this an error log');
    // Log::warning('this an warning log');
    // Log::debug('this an debug log');



});



Route::get('/categories', function () {


    // One-To-Many Eloquent Relationship।

    // return DB::table('categories')->get();

    return DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.category_id')
        ->select(
            'categories.id as category_id',
            'categories.name as category_name',
            'products.id as product_id',
            'products.name as product_name',
            'products.price'
        )
        ->get();
});



// Route::get('/products', function () {


//     // Many To Many Eloquent Relationship।


//     return DB::table('products')
//     ->join('product_tag', 'products.id', '=', 'product_tag.product_id')
//     ->get();


// });


Route::get('/products', function () {

    return DB::table('products')
        ->join('product_tag', 'products.id', '=', 'product_tag.product_id')
        ->join('tags', 'product_tag.tag_id', '=', 'tags.id')
        ->where('product_tag.tag_id', 2)
        ->select(
            'products.*',
            'tags.name as tag_name'
        )
        ->get();
});



Route::get('/session', function (Request $request) {

    // session([
    //     'user_id' => 1
    // ]);

    // log::channel('anik')->info('User ID from session', [session('user_id')]);

    Session::put(
        'cart',
        [
            [
                'product_id' => 1,
                'quantity' => 2
            ],

            [
                'product_id' => 1,
                'quantity' => 2
            ],
            [
                'product_id' => 1,
                'quantity' => 2
            ]
        ]
    );

    // Session::forget('cart');

    Session::flush();


    if (Session::has('cart')) {
        log::channel('anik')->info('User ID from session', [

            Session::get('cart'),



        ]);
    } else {
        Log::channel('anik')->info('No Item Found On Session');
    }
});
