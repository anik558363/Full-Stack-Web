<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {

        $pageName = 'Home';
        $htmlCode = "<h2>this is h1 tag</h2>";

        $age = 20;


        $userList = [
           
        ];

        return view('home', compact('pageName', 'htmlCode', 'age', 'userList'));
    }

    public function about()
    {
        $pageName = 'About';
        return view('about', compact('pageName'));
    }
}
