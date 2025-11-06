<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sumOfTwoNumbers()
    {
        $a = 20;
        $b = 30;
        $c = $a + $b;

        return $c;
    }


    public function responseTest(){

        // return "test";
        // return 222;
        // return null;
        // return [11, 5, 71, 2];

        $userData = ["anik", "joy", "arpon"];
        $total = 2020;


      return response()->json([

        "Batch" => "laravel-09",
        "Teacher" => "sobuj",
        'user' => $userData,
        'total' => $total

      ]);

    }

    public function redrectToExternalUrl(){

        return redirect("https://chatgpt.com/c/690ac051-377c-8322-8a0d-cae6f37c8327");

    }


  public function redirectToInternalUrl(){

    return redirect()->route('response.test');
}


public function returnFile(){

    return response()->file(public_path('logo.jpg'));


}


// public function downloadFile() {


//     return respponse::download(public_path('log.jpg'));

// }


public function downloadFile() {
    return response()->download(public_path('logo.jpg', 'anik.jpg'));
}



}
