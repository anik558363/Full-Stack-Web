<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function getTasks()
    {
//        $tasks = DB::table('tasks')->get();

        $tasks = Task::all();
//        return response()->json($tasks);
        return $tasks;
    }

    public function orderItem()
    {
//        return OrderItem::all();
//        return DB::table('order_items')->get();
//        return DB::table('order_items')->where('id',3)->first();
//        return OrderItem::find(3);

//        return DB::table('order_items')->select('product_name','quantity','price')->get();
//        return OrderItem::select('product_name','quantity','price')->get();
//        return OrderItem::where('product_name','Laptop Stand')->get();

//        return OrderItem::where('price','>',500)
//            ->where('quantity','>=',2)
//            ->get();

        return OrderItem::where('price','>',1000)
            ->orWhere('quantity','>=',2)
            ->get();


    }
}
