<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{


    //    public function sayHello()
    // {
    //     // return view('welcome');


    //     return [

    //         "name" => "anik"

    //     ];

    // }


    // public function sayHello()
    // {
    //     // return view('welcome');


    //     return response()->json([

    //         'message' => 'Hello, World'

    //     ]);
    // }


    //  public function sayHello()
    // {
    //     // return view('welcome');


    //     return response()->json([

    //         'message' => 'Hello, World'

    //     ]);
    // }


    //  public function sayHello()
    // {
    //     // return view('welcome');


    //     return response()->json([

    //         'name' => 'Panda',
    //         'age' => 4

    //     ]);
    // }


    // public function sayHello()
    // {
    //     return response()->download(
    //         public_path('banner.jpeg'),
    //         'teadsfasdst.jpeg'
    //     );
    // }

    public function homePage()
    {


        return "Hello World";
    }


    // public function sayHello($name){

    // return $name;

    // }


    // public function login(Request $request){

    //     // return $request->name;

    //     return $request->json()->all();

    // }


    // public function homePage()
    // {
    //     return view('welcome', ["name" => "anik"]);
    // }


    // public function register(Request $request)
    // {



    //     try {
    //         $validated = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email',
    //         ]);

    //         return response()->json([
    //             'message' => 'Registration successful',
    //             'data' => $validated,
    //         ]);
    //     } catch (\Throwable $e) {
    //         return response()->json([
    //             'message' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

    // public function register(Request $request)
    // {



    //     if ($request->email == 'anik@gmail.com')


    //     $frontCookie = $request->cookie('token');

    //     $token = 'secretEncryptedToken';
    //     $token = json_encode([
    //         'email' => $request->email,
    //         'token' => $token,
    //         'id' => 1
    //     ]);

    //     return response()->json([
    //        json_decode($frontCookie)
    //     ])->withCookie('token', $token, 60, '/', null, false, true);
    // }


    // public function register(Request $request)
    // {


    //     if ($request->email == 'anik@gmail.com') {

    //         $frontCookie = $request->cookie('token');

    //         $token = 'secretEncryptedToken';

    //         $token = encrypt("anik is student");


    //         return response()->json([
    //             decrypt($frontCookie)
    //         ])->withCookie('token', $token, 60, '/', null, false, true);
    //     }
    // }




    // public function register(Request $request)
    // {

    //     // return $request->ip();
    //     // return $request->ips();

    //     if ($request->email == 'anik@gmail.com') {

    //         return response([
    //             'status' => "success"

    //         ])->withCookie('token', 'anikToken', 60, '/', null, false, true);
    //     }
    // }


    public function register(Request $request)
    {





        $token = encrypt([
            'password' => 'anik12345',
        ]);

        return response()->json([
            "Register Succesefully",
        ])->withCookie(
            'token',
            $token,
            60,
            '/',
            null,
            false,
            true
        );
    }


    public function getProfile(Request $request)
    {

        return response()->json([
            'name' => 'anik',
            'email' => 'anik@gmail.com'

        ]);
    }


    public function fileUploade(Request $request)
    {



    // $path = 'storage/uploads/1788066744.jpeg';

    // unlink($path);


    $path = 'uploads/1788067377.png';

    Storage::disk('public')->delete($path);


        if ($request->hasFile('avatar')) {


            $file = $request->file('avatar');

            // $file->store('uploads');


            $name = time() . '.' . $file->getClientOriginalExtension();

          $path =  $file->storeAs('uploads', $name, 'public');

            return response()->json([
                $file->getClientOriginalName(),
                $file->getClientOriginalExtension(),
                $file->getSize(),
                $path
            ]);
        }
    }



    public function throttling(Request $request){

        return "22";

    }
}
