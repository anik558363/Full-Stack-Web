<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {

        $pageName = 'Home';
        $htmlCode = "<h2>this is h1 tag</h2>";

        $age = 19;


        $userList = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com'
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob@example.com'
            ],
            [
                'name' => 'Alice Williams',
                'email' =>  'alice@example.com'
            ],
            [
                'name' => 'David Brown',
                'email' =>  'david@example.com'
            ],
            [
                'name' => 'Emily Davis',
                'email' =>  'emily@example.com'
            ]
        ];

        return view('home', compact('pageName', 'htmlCode', 'age', 'userList'));
    }

    public function about()
    {
        $pageName = 'About';
        return view('about', compact('pageName'));
    }
}
