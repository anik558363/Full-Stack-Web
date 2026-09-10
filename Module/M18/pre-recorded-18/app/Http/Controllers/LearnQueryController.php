<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearnQueryController extends Controller
{

    public function learn()
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


        $orders = DB::table('order_items')
                ->join('orders', 'orders.id', '=', 'order_items.order_id')
                ->join('products', 'products.id', '=', 'order_items.product_id')
                ->join('users', 'users.id', '=', 'orders.user_id')
                ->get();

        return $orders;
    }
}
