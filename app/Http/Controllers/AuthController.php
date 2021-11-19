<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
     * Handle Authentication Request
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function admin_auth(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::guard('admin')->attempt($credentials)){
            $user = Auth::guard('admin')->user();
            return redirect('admin');
        }

        return back()->withErrors([
            'status' => 'The provided credentials not valid.',
        ]);
    }

    public function user_auth(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)){
            return redirect('admin');
        }

        return back()->withErrors([
            'status' => 'The provided credentials not valid.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        return redirect('admin');
    }
}
