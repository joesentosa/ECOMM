<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\BrandModel;
use App\Models\CustomerModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function landing()
    {
        $brands = BrandModel::all();
        $barangs = BarangModel::with(['gambar'])->get();
        $kategories = KategoriModel::all();
        return view('__User.dashboard.landing', compact('brands', 'barangs', 'kategories'));
    }

    public function homepage()
    {
        return view('__User.dashboard.home');
    }

    public function login()
    {
        return view('__User.dashboard.login');
    }

    public function getDataCustomer(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        return view('__User.user_profile', ['customer' => $customer]);
    }

    public function getDataForUpdate(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        return view('__User.user_update_profile', ['customer' => $customer]);
    }

    public function doUpdate(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        $customer->update($request->all());
        Auth::user()->update($request->all());
        return redirect()->back();
    }
}
