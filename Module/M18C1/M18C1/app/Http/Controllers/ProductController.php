<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {

        // return response()->json(['message' => 'Product index']);

        // row sql query

        // SELECT * FROM `products`;
        // $products = DB::table('products')->get();


        // single row sql query by condition
        // SELECT `id`, `title`, `sku`, `price`, `stock`, `is_active`, `created_at`, `updated_at` FROM `products` WHERE title = "Laptop Backpack"

        // $products = DB::table('products')
        //     ->select('id', 'title', 'sku', 'price', 'stock', 'is_active', 'created_at', 'updated_at')
        //     ->where('title', '=', 'Laptop Backpack')
        //     ->get();


        // single row sql query by id
        // SELECT * FROM `products` WHERE id = 2;
        // $products = DB::table('products')->where('id', '=', 2)->first();

        // multiple rows sql query by condition
        // SELECT * FROM `products` WHERE price > 50.00;
        // $products = DB::table('products')->where('price', '>', 1500.00)->where('stock', ">", "12")->get();

        // $products = DB::table('products')->where('price', '>', 1500.00)->first();

        // $products = DB::table('products')->find(3);

        // $products = DB::table('products')->count();

        // $products = DB::table('products')->sum('price');

        // $products = DB::table('products')->max('price');

        $products = DB::table('products')->sum(DB::raw('price * stock'));



        return $products;
    }


    public function order()
    {


        // $order = DB::table('orders')->get();

        $order = DB::table('orders')
            ->join('customers', 'customers.id' , '=', 'orders.customer_id' )
            ->select(
                'orders.id as order_id',
                'customers.name as customer_name',
                'customers.email as customer_email',
                'orders.order_date',
                'orders.status',
                'orders.total'
            )->get();

        return $order;


    }
}
