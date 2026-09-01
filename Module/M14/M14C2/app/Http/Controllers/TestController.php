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
            'userData' => $userData,
            'Batch' => 'Laravel-09',
            'Teacher' => 'Sobuj'
        ]);
    }


    public function redircetToExternalUrl()
    {
        return redirect('https://ostad.app/');
    }


    public function redirectToInternalUrl()
    {
        return redirect()->route('response.test');
    }


    public function fileReturn()
    {


        return response()->file(public_path('coderixa_favicon.png'));
    }

    public function pdfFileReturn()
    {


        return response()->file(public_path('img/anik(cv).pdf'));
    }

    public function downloadFile()
    {
        $file = public_path('img/anik(cv).pdf');

        if (!file_exists($file)) {
            abort(404, 'CV file not found.');
        }

        return response()->download($file, 'anikmondal-cv.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }


    public function setcookie()
    {


        return response('cookie has been set')->cookie('name', 'anik mondal', 60);
    }


    public function getcookie(Request $request)
    {

        $value = $request->cookie('name');

        return response('Cookie value: ' . $value);
    }


    public function deleteCookie()
    {
        return response('Cookie deleted')->withoutCookie('name');

    }


    public function sessionSet(){


    session(['name' => 'anik mondal', 'age' => 25]);

    return response('Session has been set');

    }


    public function sessionGet(Request $request){

        $name = $request->session()->get('name');
        $age = $request->session()->get('age');

        return response("Session values: Name - $name, Age - $age");
    }

    public function sessionDelete(Request $request){

        $request->session()->forget('name');


        return response('Session values deleted');
    }


    public function sessionFlush(Request $request){

        $request->session()->flush();

        return response('All session values deleted');
    }


}
