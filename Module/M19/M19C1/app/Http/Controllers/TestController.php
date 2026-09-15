<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function getTasks(){

    // $tasks = DB::table('products')->get();

    $products = Product::get();

    // return response()->json($products);

    return $products;

    }


    public function orderItem(){

    //    return OrderItem::get();

    // return OrderItem::find(2);

    //  return OrderItem::select('product_name','price')->get();

//    return OrderItem::where('product_name', 'Laptop Stand')->select('product_name', 'price')->get();

 return OrderItem::where('product_name', 'Laptop Stand')->where('quantity', '>=', '2')->select('product_name', 'price')->get();



    }

}
