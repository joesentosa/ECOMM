<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function IndexAdmin(){return view('__Admin.dashboard.index');}
    public function BarangAdmin(){return view('__Admin.dashboard.barang');}
    public function BrandAdmin(){return view('__Admin.dashboard.brand');}
    public function KategoriAdmin(){return view('__Admin.dashboard.kategori');}
    public function AdminUser(){return view('__Admin.dashboard.useradmin');}
    public function Customer(){return view('__Admin.dashboard.customer');}
    public function HorderAdmin(){return view('__Admin.dashboard.horder');}
    public function DorderAdmin(){return view('__Admin.dashboard.dorder');}
    public function ShippingAdmin(){return view('__Admin.dashboard.shipping');}
    public function PromoAdmin(){return view('__Admin.dashboard.promo');}
    public function WishlistAdmin(){return view('__Admin.dashboard.wishlist');}
}
