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
                $users = DB::table('users')->find(2);




        return $users;
    }
}
