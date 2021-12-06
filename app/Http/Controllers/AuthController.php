<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            return redirect()->route('page.index.admin');
        }

        return back()->withErrors([
            'status' => 'The provided credentials not valid.',
        ]);
    }

    public function customer_auth(Request $request)
    {
        $credentials = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials, $request->remember_me)) {
            return redirect()->route('page.index.customer');
        }

        return back()->withErrors([
            'status' => 'The provided credentials not valid.',
        ]);
    }

    public function customer_regis(Request $request)
    {
        $credentials = $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "username" => "required",
            "email" => "required|email",
            "password" => "required"
        ]);

        $customer = CustomerModel::where('username', $request->username)
            ->orWhere('email', $request->email)
            ->first();

        if ($customer) {
            return back()->withErrors(['status' => 'User Already Registered']);
        }

        $customer = new CustomerModel();
        $customer->saveData($request->username, $request->firstname, $request->lastname, $request->email, '',
            '', '', $request->password);

        return back()->with('status', 'User Registered'); // todo: change this to user specified page
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }

    // region Google Auth
    public function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    //TODO : JERE - REFACTOR THIS CODE
    public function handleCallbackGoogle(Request $request)
    {
        try {

            $user = Socialite::driver('google')->user();

            $findUser = CustomerModel::where('google_id', $user->getId())->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect('/');
            } else {
                // TODO JERE CREATE NEW CUSTOMER HERE
                $user_data = $user->user;
                $customer = CustomerModel::create([
                    'username' => $user_data['given_name'] . $user_data['sub'],
                    'firstname' => $user_data['given_name'],
                    'lastname' => $user_data['family_name'],
                    'email' => $user_data['email'],
                    'password' => Hash::make($user_data['sub']),
                    'google_id' => $user->getId(),
                ]);

                Auth::login($customer);
            }
            return redirect('user/profile');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    // endregion
}
