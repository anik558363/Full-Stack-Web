<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function sumOfTwoNumber()
    {

        $a = 20;
        $b = 20;
        $c = $a + $b;

        return $c;
    }



    public function responseTest()
    {


        // return "hello";

        // return 3332.25;


        // return null;

        // return ['Laravel', 'PHP', 'js'];

        // $array = ['Laravel', 'PHP', 'js'];

        // return $array;


        // return response()->json([
        //     'Batch' => 'Laravel-09',
        //     'Teacher' => 'Sobuj'
        // ]);


        $userData = ['anik', 'ritu', 'test'];

        $total = 200;

        return response()->json([
            'total' => $total,
            '$userData' => $userData,
            'Batch' => 'Laravel-09',
            'Teacher' => 'Sobuj'
        ]);
    }
}
