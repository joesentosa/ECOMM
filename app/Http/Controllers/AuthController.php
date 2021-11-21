<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

        return redirect('admin')->withErrors([
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

    // region Google Auth
    public function redirectToGoogle($request)
    {
        return Socialite::driver('google')->redirect();
    }
            //TODO : JERE - REFACTOR THIS CODE
    public function handleCallbackGoogle($request)
    {
        try {

            $user = Socialite::driver('google')->user();

            $findUser = CustomerModel::where('google_id', $user->getId())->first();

            if ($findUser)
            {
                Auth::login($findUser);
                return redirect('/');
            }
            else
            {
                // TODO JERE CREATE NEW CUSTOMER HERE
            }

        } catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
    // endregion
}
