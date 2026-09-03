<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home()
    {

    $pageName = 'Home';

        return view('home', compact('pageName'));
    }

    public function about()
    {
        $pageName = 'About';
        return view('about', compact('pageName'));
    }

}
