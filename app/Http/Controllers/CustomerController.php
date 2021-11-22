<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function homepage()
    {
        return view('__User.home');
    }

    public function login()
    {
        return view('__User.login');
    }
}
