<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearnQueryController extends Controller
{

    public function learn(Request $request)
    {

        // select query
        // $users = DB::table('users')->get();



        // single user select query
        // $users = DB::table('users')->where('id', 2)->first();


        // select method
        // $users = DB::table('users')->select('id','name', 'email')->get();


        // select method use like
        // $users = DB::table('users')->where('name', 'like', '%f%')->get();


        // select method find, first
        // $users = DB::table('users')->find(2);
        // $users = DB::table('users')->find(2);


        // inner join

        // $users = DB::table('users')
        //     ->join('roles', 'users.role_id', '=', 'roles.id')->select('users.name as user_name','users.email', 'roles.name as role_name')->get();


        // inner leftjoin

        // $users = DB::table('roles')
        //     ->leftJoin('users', 'users.role_id', '=', 'roles.id')->select('users.name as user_name','users.email', 'roles.name as role_name')->get();


        // inner leftjoin

        // $users = DB::table('users')
        //     ->rightJoin('roles', 'users.role_id', '=', 'roles.id')->select('users.name as user_name', 'users.email', 'roles.name as role_name')->get();


        // practical example with join

        // $userProfile = DB::table('users')
        //                ->join('profiles', 'profiles.user_id', '=', 'users.id')->get();


        // $userProfile = DB::table('users')
        //     ->join('profiles', 'profiles.user_id', '=', 'users.id')
        //     ->where('users.id', 2)
        //     ->first();


        // $orders = DB::table('order_items')
        //         ->join('orders', 'orders.id', '=', 'order_items.order_id')
        //         ->join('products', 'products.id', '=', 'order_items.product_id')
        //         ->join('users', 'users.id', '=', 'orders.user_id')
        //         ->get();


        // aggregate in query builder

        // $products = DB::table('products')->count();
        //  $products = DB::table('products')->sum('price');
        // $products = DB::table('products')->min('price');
        // $products = DB::table('products')->max('price');
        //  $products = DB::table('products')->avg('price');



        // where method useing query
        // $products = DB::table('products')->where('price', '<',4000)->get();
        // $products = DB::table('products')->whereBetween('id', [2, 5])->get();
        // $products = DB::table('products')->whereIn('id', [2, 5])->get();


        // filter feacture 

        // $name = $request->query('name');
        // $price = $request->query('price');
        // $minPrice = $request->query('min_price');
        // $maxPrice = $request->query('max_price');



        // $products = DB::table('products')
        // ->when($name, function ($query) use ($name) {
        //     return $query->where('name', 'like', '%'.$name.'%');
        // })
        // ->when($price, function ($query) use ($price) {
        //     return $query->where('price', '<', $price);
        // });

        // $name = $request->query('name');
        // $minPrice = $request->query('minPrice');
        // $maxPrice = $request->query('maxPrice');

        // $products = DB::table('products')
        //     ->when($name, function ($query) use ($name) {
        //         return $query->where('name', 'like', '%' . $name . '%');
        //     })
        //     ->when($minPrice, function ($query) use ($minPrice) {
        //         return $query->where('price', '>=', $minPrice);
        //     })
        //     ->when($maxPrice, function ($query) use ($maxPrice) {
        //         return $query->where('price', '<=', $maxPrice);
        //     });



        // group by method
        // $orders = DB::table('orders')
        //           ->groupBy('user_id')
        //           ->select('user_id', DB::raw('COUNT(*) as OrderCount'))
        //           ->get();



        // orderby, limit, skip-take in query builder

        // $orders = DB::table('orders')
        //     ->orderBy('total', 'asc')
        //     ->limit(2)
        //     ->skip(2)
        //     ->take(10)
        //     ->get();

        // $order_items = DB::table('order_items')->paginate(5);


        // $userCreated = DB::table('users')->insert([
        //     'name' => 'Cute Panda',
        //     'email' => 'cutepanda1@gmail.com',
        //     'role_id' => 2,
        //     'password' => bcrypt('password123'), // always hash passwords
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);


        // $affected = DB::table('users')->where('id', 2)->update([
        //     'name' => 'Updated Panda',
        //     'updated_at' => now(),
        // ]);

        // $affected = DB::table('order_items')->where('id', 3)->increment('qty');
        // $affected = DB::table('products')->upsert(
        //     [
        //         ['name' => 'Wireless Mouse', 'price' => 901.00, 'stock' => 40, 'updated_at' => now()],
        //     ],
        //     ['name'],
        //     ['price', 'stock', 'updated_at']
        // );

       $affected = DB::table('products')->where('id', 2)->delete();

        return $affected;
    }
}
