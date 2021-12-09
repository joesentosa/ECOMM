<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\BrandModel;
use App\Models\CustomerModel;
use App\Models\KategoriModel;
use App\Models\PromoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
// use App\Http\Controllers\Session;
use Jorenvh\Share\Share;

class CustomerController extends Controller
{
    public function page_invoice(){
        return view('__User.dashboard.invoice');
    }
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
        // $dtbarang = BarangModel::getByName($name);
        $socialShare = \Share::currentPage("Hey! Look at this product.. It's Awesome! Get It Now!", [], null, null)
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram()
            ->getRawLinks();

        return view('__User.dashboard.detailItem',compact('barang','socialShare'));
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

    public function addingToCart(Request $request)
    {
        $barangId = $request->id;
        $barangQty = $request->banyak ?? 1;
        if ($request->session()->has('cart_barang')) {
            $cart_barang= session('cart_barang');
            $cekSama = false;
            $indexBarang = -1;
            for ($i=0; $i < count($cart_barang); $i++) {
                if ($barangId == $cart_barang[$i]["id"]) {
                    $cekSama = true;
                    $indexBarang = $i;
                }
            }
            if ($cekSama == true) {
                $request->session()->forget('cart_barang');
                $cart_barang[$indexBarang]['qty'] += $barangQty;
                $request->session()->put('cart_barang',$cart_barang);
            }else{
                $request->session()->forget('cart_barang');
                $barang = [
                    'id'=>$barangId,
                    'qty'=>$barangQty
                ];
                array_push($cart_barang, $barang);
                $request->session()->put('cart_barang',$cart_barang);
            }

        }else{
            $cart_barang = [];
            $barang = [
                'id'=>$barangId,
                'qty'=>$barangQty
            ];
            array_push($cart_barang , $barang);
            $request->session()->forget('cart_barang');
            $request->session()->put('cart_barang',$cart_barang);
            // dd($cart_barang);
        }
        return redirect("catalog");
        // return back();
    }
}
