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
        $dtSession   = BarangModel::get();
        $customer   = Auth::user();
        $WLCek      = null;
        $WLCust      = null;
        if ($customer == null) {
            $customer = null;
        }else{
            $WLCek = WishlistModel::where('fk_id_customer',$customer->id_customer)->first();
        }
        $WishlistCust = null;
        $wishlistCount = 0;
        if ($WLCek != null) {
            $WishlistCust = WishlistModel::where('fk_id_customer',$customer->id_customer)->get();
            $wishlistCount = count($WishlistCust);
            $WL_fk_barang = [];
            for ($i=0; $i < $wishlistCount; $i++) {
                array_push($WL_fk_barang, $WishlistCust[$i]->fk_id_barang);
            }
            $WLCust = BarangModel::whereIn('id_barang',$WL_fk_barang)->get();
        }
        $cart       = null;
        $cartCount  = 0;
        if ($req->session()->has('cart_barang')) {
            $cart      = session('cart_barang');
            $cartCount = count($cart);
        }
        // dd($cart);
        return view('__User.dashboard.catalog',[
            'data_kategori'=>$dtkategori->getAll(),
            'data_brand' => $dtbrand,
            'data_barang' => $dtbarang,
            'data_session' => $dtSession,
            'cart_barang'=> $cart,
            'cart_count'=>$cartCount,
            'WL_cust'=>$WLCust,
            'WL_count'=>$wishlistCount
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

    public function deleteWL(Request $req)
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

        $dtWishlist = new WishlistModel();
        $dtWishlist->deleteWishlist($cekAda->id_wishlist);

        return redirect('catalog');
    }

    public function deleteCart(Request $req)
    {
        $barangId = $req->barangId;
        $arrTemp = session('cart_barang');
        $cart_barang = session('cart_barang');
        $inputSession = [];
        $req->session()->forget('cart_barang');
        for ($i=0; $i < count($arrTemp); $i++) {
            if ($arrTemp[$i]['id'] == $barangId) {
                unset($arrTemp[$i]);
            }
        }
        for ($i=0; $i < count($arrTemp); $i++) { 
            for ($j=0; $j < count($cart_barang); $j++) { 
                if ($i == $j) {
                    array_push($inputSession, $cart_barang[$j]);
                }
            }
        }
        $req->session()->put('cart_barang',$inputSession);
        // dd(session('cart_barang'));
        return back();
    }

    public function cart(Request $request)
    {
        return view('__User.dashboard.cart');
    }
    public function checkout(Request $request)
    {
        return view('__User.dashboard.checkout');
    }

    public function filterCategory(Request $request)
    {
        //Masih bug
        $category = $request->category;
        // dd($category);
        $brg = [];
        for ($i=0; $i < count($category); $i++) {
            $temp = BarangModel::where('fk_id_kategori',$category[$i])->get();
            array_push($brg, $temp);
        }

        $dtkategori = new KategoriModel();
        $dtbrand    = BrandModel::limit(5)->get();
        $customer   = Auth::user();
        $dtSession   = BarangModel::get();
        $WLCek      = null;
        $WLCust      = null;

        if ($customer == null) {
            $customer = null;
        }else{
            $WLCek = WishlistModel::where('fk_id_customer',$customer->id_customer)->first();
        }
        $WishlistCust = null;
        $wishlistCount = 0;
        if ($WLCek != null) {
            $WishlistCust = WishlistModel::where('fk_id_customer',$customer->id_customer)->get();
            $wishlistCount = count($WishlistCust);
            $WL_fk_barang = [];
            for ($i=0; $i < $wishlistCount; $i++) {
                array_push($WL_fk_barang, $WishlistCust[$i]->fk_id_barang);
            }
            $WLCust = BarangModel::whereIn('id_barang',$WL_fk_barang)->get();
        }
        $cart       = null;
        $cartCount  = 0;
        if ($request->session()->has('cart_barang')) {
            $cart      = session('cart_barang');
            $cartCount = count($cart);
        }
        // dd($cart);
        $data = [
            'data_kategori'=>$dtkategori->getAll(),
            'data_brand' => $dtbrand,
            'data_barang' => $brg,
            'data_session' => $dtSession,
            'cart_barang' => $cart,
            'cart_count'=>$cartCount,
            'WL_cust'=>$WLCust,
            'WL_count'=>$wishlistCount
        ];
        return view('__User.dashboard.filter-category', $data);
    }

    public function filterPrice(Request $request)
    {
        $dtkategori = new KategoriModel();
        $dtbrand    = BrandModel::limit(5)->get();
        $customer   = Auth::user();
        $dtSession   = BarangModel::get();
        $WLCek      = null;
        $WLCust      = null;

        $min = explode(";", $request->my_range);

        if ($customer == null) {
            $customer = null;
        }else{
            $WLCek = WishlistModel::where('fk_id_customer',$customer->id_customer)->first();
        }
        $WishlistCust = null;
        $wishlistCount = 0;
        if ($WLCek != null) {
            $WishlistCust = WishlistModel::where('fk_id_customer',$customer->id_customer)->get();
            $wishlistCount = count($WishlistCust);
            $WL_fk_barang = [];
            for ($i=0; $i < $wishlistCount; $i++) {
                array_push($WL_fk_barang, $WishlistCust[$i]->fk_id_barang);
            }
            $WLCust = BarangModel::whereIn('id_barang',$WL_fk_barang)->get();
        }
        $cart       = null;
        $cartCount  = 0;
        if ($request->session()->has('cart_barang')) {
            $cart      = session('cart_barang');
            $cartCount = count($cart);
        }
        $data = [
            'data_kategori'=>$dtkategori->getAll(),
            'data_brand' => $dtbrand,
            'data_barang' => BarangModel::where('harga','>=',$min[0])->where('harga','<=',$min[1])->get(),
            'data_session' => $dtSession,
            'cart_barang' => $cart,
            'cart_count'=>$cartCount,
            'WL_cust'=>$WLCust,
            'WL_count'=>$wishlistCount
        ];
        return view('__User.dashboard.filter-price', $data);
    }
}
