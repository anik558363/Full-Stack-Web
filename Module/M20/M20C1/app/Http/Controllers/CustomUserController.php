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

            session([
                'custom_user_id' => $user->id,
                'custom_user_name' => $user->name,
                'custom_user_email' => $user->email,
            ]);

            return redirect()->route('custom.dashboard') ->with('success', 'Logged in successfully.');; // Redirect to a dashboard or home page
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {


        session()->forget(['custom_user_id', 'custom_user_name', 'custom_user_email']);
        return redirect()->route('custom.login')
        ->with('success', 'Logged out successfully.');
    }
}
