<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


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

      ], 201);

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



public function downloadFile() {
    return response()->download(public_path('logo.jpg', 'anik.jpg'));
}



public function setCookie()
{
    return response("Cookie has been set")
        ->cookie('name', 'anik', 18);
}


 public function getCookie(Request $request)
    {
        $myNameFromCookie = $request->cookie('name');

        return response()->json(['cookie' => $myNameFromCookie]);
    }




public function deleteCookie() {

    return response('Cookie has been deleted')->withoutCookie('name');

}


public function setSession() {

    session(['fullName' => "anik mondol"]);

    return response("session has been set");


}



public function getSession()
{
    $getSession = session('fullName');

    return response()->json(['session' => $getSession]);
}



public function deletedSession()
{
    session()->forget('fullName');

    return response()->json(['session' => 'Session deleted successfully']);
}


public function flushSession()
{
    session()->flush();
    return response("session has been flush");
}

public function withCusomHeader() {

    return response("response with custom header")
        ->header('X-Custom-Header', 'anik-mondol');

}


public function idAddress(Request $request) {

    $idAddress = request()->ip();

    return response()->json(['ip_address' => $idAddress]);

}


}
