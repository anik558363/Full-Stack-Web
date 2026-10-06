<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomUserController extends Controller
{
    public function showLoginForm()
    {

        return view('custom_auth.login');
    }


    public function loginSubmit(Request $request)
    {

      

        $email = $request->email;
        $password = $request->password;

        $user = CustomUser::where('email', $email)
            ->where('password', $password)
            ->where('is_active', true)
            ->first();

        if ($user) {
            // Authentication successful
            // You can set session or perform any other actions here
            return redirect()->route('custom.dashboard'); // Redirect to a dashboard or home page
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }
}
