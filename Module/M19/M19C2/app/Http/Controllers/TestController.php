<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
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
                    $query->select(
                        'id',
                        'order_id',
                        'product_id',
                        'product_id',
                        'qty',
                        'unit_price'
                    )->orderBy('id', 'desc');
                }

            ])
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($data);
    }


    public function manyToMany()
    {
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', 'Accessories');
        })->with('categories')->get();


        return response()->json($products);
    }

    public function productWithCat()
    {
        $products = Product::with('categories')->get();

        return response()->json($products);
    }



    public function categoryWirhPro()
    {
        $categories = Category::with('products')->get();

        return response()->json($categories);
    }

    //  public function manyToManyTest(){

    //     $products = Product::with(['categories' => function($query){

    //     $query->where('name', 'Accessories');

    //     }])->get();


    //      return response()->json($products);
    // }


    public function manyToManyTest()
    {
        $products = Product::with(['categories'])
            ->whereHas('categories', function ($query) {
                $query->where('name', 'Accessories');
            })->get();

        return response()->json($products);
    }


    public function selfReff()
    {
        $tree = Category::with('children')
        ->where('parent_id', null)
        ->get();

        return response()->json($tree);
    }


     public function withParent()
    {

    $tree = Category::with('children')
        ->where('parent_id', null)
        ->get();

        $withParents = Category::with('parent')
  ->whereNotNull('parent_id')
        ->get();

        return response()->json(
            ['root_with_childern' => $tree, 'childern_with_parent' => $withParents]
        );
    }


}

