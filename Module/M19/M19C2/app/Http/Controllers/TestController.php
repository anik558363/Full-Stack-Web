<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function oneToOne()
    {

        $data = Customer::with('profile')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($data);
    }


    // public function onToMany()
    // {

    //     $data = Customer::with('orders.items')
    //         ->orderBy('id', 'desc')
    //         ->get();
    //     return response()->json($data);
    // }



    // public function onToMany()
    // {

    //     $data = Customer::with(['orders.items' => function($query){
    //         $query->select('order_id', 'product_id', 'qty', 'unit_price');
    //     } ])
    //         ->orderBy('id', 'desc')
    //         ->get();

    //     return response()->json($data);
    // }


    public function onToMany()
    {

        $data = Customer::select('id', 'name', 'email', 'phone')
            ->with([
                'orders' => function ($query) {
                    $query->select('id', 'order_no',  'customer_id', 'status', 'grand_total')->orderBy('id', 'desc');
                },
                'orders.items' => function ($query) {
                    $query->select('id', 'order_id',
                    'product_id', 'product_id', 'qty', 'unit_price')->orderBy('id', 'desc');
                }

            ])
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($data);
    }
}
