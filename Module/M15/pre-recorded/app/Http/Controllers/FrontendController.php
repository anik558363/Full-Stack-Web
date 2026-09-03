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


        $userList = [];

        return view('home', compact('pageName', 'htmlCode', 'age', 'userList'));
    }

    public function about()
    {
        $pageName = 'About';
        return view('about', compact('pageName'));
    }


    public function login(Request $request)
    {



        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $password = $request->input('password');
        $email = $request->input('email');

        if ($email != 'anik@gmail') {
            return redirect()->back()->with('error', 'Email is required');
        }

        if ($password != 'anik12345678') {
            return redirect()->back()->with('error', 'Invalid password');
        }


        return redirect()->back()->with('success', 'Login successful');
    }
}
