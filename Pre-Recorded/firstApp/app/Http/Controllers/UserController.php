<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{


    // public function sayHello()
    // {
    //     $filePath = public_path('test.txt');
    //     $fileName = 'myfile.txt';

    //     return response()->download($filePath, $fileName);
    // }



    public function homePage()
    {
        return "Hello from User Controller";
    }


    public function sayHello()
    {

        return "hello panda ";
    }


    public function sayHelloRequest($id)
    {

        return "hello panda your id is: " . $id;
    }




    public function loginPage(Request $request)
    {


        return $request->json()->all();
    }


    // public function register(Request $request)
    // {


    //     try {

    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users',
    //         ]);

    //         return $request;
    //     } catch (\Throwable $e) {

    //         return response()->json([

    //             'error' => 'Validation failed',
    //             'massage' => $e->getMessage(),

    //         ], 422);
    //     }
    // }


    //     public function register(Request $request)
    // {

    //     if($request->email == 'anik@gmail.com'){

    //         $token = "secretEncryptedToken";
    //         $token = json_encode($token);

    //         return response()->json([

    //             'status' => 'successful',

    //         ])->withoutCookie('token', $token, 60, '/', null, false, true);


    //     }


    // }


    //       public function register(Request $request)
    // {

    //    return $request->header('token');


    // }


    //        public function register(Request $request)
    // {


    //     if($request->email == 'anik@gmail.com'){

    //         return response()->json([

    //             'status' => 'successful',

    //         ])->withCookie('token', 'secretEncryptedToken', 60, '/', null, false, true);


    //     }



    // }



    public function register(Request $request)
    {


        if ($request->email == 'anik@gmail.com') {

            return response()->json([

                'status' => 'successful',

            ])->withCookie('token', 'secretEncryptedToken', 60, '/', null, false, true);
        }
    }
}
