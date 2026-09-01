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

}
