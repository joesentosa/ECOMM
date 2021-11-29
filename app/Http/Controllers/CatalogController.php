<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\BrandModel;
use App\Models\BarangModel;
use App\Models\WishlistModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Session;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog(Request $req){
        $dtkategori = new KategoriModel();
        $dtbrand    = BrandModel::limit(5)->get();
        $dtbarang   = BarangModel::get();
        $user       = Auth::user();
        $cart       = null;
        $cartCount  = 0;
        $barangCart = null;
        if ($req->session()->has('cart')) {
            $cart      = session('cart');
            $cartCount = count($cart);
            $barangCart= BarangModel::whereIn('id_barang',$cart)->get();
        }
        // dd($barangCart);
        // $selectKategori = BarangModel::whereIn("fk_id_kategori", $dtkategori->id_kategori)->get();
        // $cart = session('cart');
        return view('__User.dashboard.catalog',[
            'data_kategori'=>$dtkategori->getAll(),
            'data_brand' => $dtbrand,
            'data_barang' => $dtbarang,
            'barang_cart' => $barangCart,
            'cart_count'=>$cartCount
        ]);
    }

    public function wishlistData(Request $req)
    {
        $barangId   = $req->barangId;
        if (Auth::guard('web')->guest())
        {
            return redirect('login');
        }
        $user       = Auth::user()->id_customer;
        // dd($user);
        // var_dump($barangId);
        $cekAda     = WishlistModel:: where('fk_id_barang', $barangId)->where('fk_id_customer',$user)->first();
        // dd($cekAda);
        if (!$cekAda) {
            $dtWishlist = new WishlistModel();
            $dtWishlist->insertWishlist($barangId,$user);
        }else{
            $dtWishlist = new WishlistModel();
            $dtWishlist->deleteWishlist($cekAda->id_wishlist);
        }

        return redirect('catalog');
    }

    public function addToCart(Request $req)
    {
        $barangId = $req->barangId;
        if ($req->session()->has('cart')) {
            $barangArr= session('cart');
            for ($i=0; $i < count($barangArr); $i++) {
                if ($barangArr[$i] == $barangId) {
                    return back();
                }
            }
            array_push($barangArr, $barangId);
            $req->session()->put('cart',$barangArr);
            // dd($barangArr);
        }else{
            $barangArr = array();
            array_push($barangArr, $barangId);
            $req->session()->put('cart',$barangArr);
        }
        return back();
    }

    public function deleteCart(Request $req)
    {
        $barangId = $req->barangId;
        $barangArr = session('cart');
        $req->session()->forget('cart');
        for ($i=0; $i < count($barangArr); $i++) {
            if ($barangArr[$i] == $barangId) {
                unset($barangArr[$i]);
            }
        }
        // dd($barangArr);
        $req->session()->put('cart',$barangArr);
        return back();
    }
}
