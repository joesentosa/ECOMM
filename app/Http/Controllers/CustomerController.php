<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\BrandModel;
use App\Models\CustomerModel;
use App\Models\KategoriModel;
use App\Models\PromoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function landing()
    {
        $brands = BrandModel::limit(25)->get();
        $barangs = BarangModel::getAll();
        $promos = PromoModel::with('barang')->get();
        $kategories = KategoriModel::with(['barang'])->get();
        return view('__User.dashboard.landing', compact('brands', 'barangs', 'kategories','promos'));
    }

    public function homepage()
    {
        return view('__User.dashboard.home');
    }

    public function login()
    {
        return view('__User.dashboard.login');
    }
    public function page_wishlist(){
        return view('__User.dashboard.wishlist');
    }
    public function detailBarang(BarangModel $barang){
        //$dtbarang = BarangModel::getByName($name);
        return view('__User.dashboard.detailItem',compact('barang'));
    }
    public function getDataCustomer(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        return view('__User.dashboard.user_profile', ['customer' => $customer]);
    }

    public function getDataForUpdate(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        return view('__User.dashboard.user_update_profile', ['customer' => $customer]);
    }

    public function doUpdate(Request $request)
    {
        $customer = Auth::user();
        $customer = CustomerModel::find($customer->id_customer);
        $customer->update($request->all());
        Auth::user()->update($request->all());
        return redirect()->back();
    }

    public function getDataBarang(Request $request)
    {
        $barang = BarangModel::find($request->id);
        $kategori = KategoriModel::find($barang->fk_id_kategori);
        $brand = BrandModel::find($barang->fk_id_brand);
        return view('__User.dashboard.user_detail_barang', ['barang' => $barang, 'brand' => $brand, 'kategori' => $kategori]);
    }
}
