<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin(){return view('__Admin.dashboard.login_admin');}
    public function IndexAdmin(){return view('__Admin.dashboard.index');}
    public function BarangAdmin(){
        $dtbarang = new BarangModel();        
        $dtbrand = new BrandModel();
        $dtkategori = new KategoriModel();
        return view('__Admin.dashboard.barang',['data' => $dtbarang->getAllById(),'brand' => $dtbrand->getAll(),'kategori' => $dtkategori->getAll()]);
    }
    public function BrandAdmin(){
        $dtbrand = new BrandModel();                
        return view('__Admin.dashboard.brand',['data' => $dtbrand->getAll()]);
    }
    public function KategoriAdmin(){
        $dtkategori = new KategoriModel();
        return view('__Admin.dashboard.kategori',['data' => $dtkategori->getAll()]);
    }
    public function AdminUser(){return view('__Admin.dashboard.useradmin');}
    public function Customer(){return view('__Admin.dashboard.customer');}
    public function HorderAdmin(){return view('__Admin.dashboard.horder');}
    public function DorderAdmin(){return view('__Admin.dashboard.dorder');}
    public function ShippingAdmin(){return view('__Admin.dashboard.shipping');}
    public function PromoAdmin(){return view('__Admin.dashboard.promo');}
    public function WishlistAdmin(){return view('__Admin.dashboard.wishlist');}

    public function reviewBarang($id){        
        $barang = BarangModel::find($id);
        return response()->json([
            "status" => 200,
            "data" => $barang
        ]);
    }

    public function updatebrand(Request $req){
        $dtbrand = new BrandModel();
        if ($req->urlimageupdate != "") {$filename = $req->urlimageupdate;}
        else{
            if ($req->hasFile('uploadFile_update')) {
                $file = $req->file('uploadFile_update');
                $extension = $file->getClientOriginalExtension();            
                $filename = 'uploads/brand/'.time().'.'.$extension;            
                $file->move('uploads/brand',$filename);
            }
        }                
        $dtbrand->updateBrand($filename,$req->nmbrand_update,$req->id_hidden);
        return back();
    }
    public function insertbrand(Request $req){
        $dtbrand = new BrandModel();
        if ($req->urlimageinsert != "") {$filename = $req->urlimageinsert;}
        else{
            if ($req->hasFile('uploadFile_insert')) {
                $file = $req->file('uploadFile_insert');
                $extension = $file->getClientOriginalExtension();            
                $filename = 'uploads/brand/'.time().'.'.$extension;            
                $file->move('uploads/brand',$filename);
            }
        }     
        $dtbrand->insertBrand($filename,$req->nmbrand_insert);
        return back();           
    }
    public function deletebrand(Request $req){
        $dtbrand = new BrandModel();
        $dtbrand->deleteBrand($req->id_brand);
        return response()->json([
            'status' => 200,            
        ]);
    }

    public function insertbarang(Request $req){
        $dtbarang = new BarangModel();
        if ($req->urlimageinsert != "") {$filename = $req->urlimageinsert;}
        else{
            if ($req->hasFile('uploadFile_insert')) {
                $file = $req->file('uploadFile_insert');
                $extension = $file->getClientOriginalExtension();            
                $filename = 'uploads/barang/'.time().'.'.$extension;            
                $file->move('uploads/barang',$filename);
            }
        }                
        // dd($filename);
        $dtbarang->insertBarang($req->nmbarang_insert, $req->stokbarang_insert, $req->hargaBarang_insert, $req->beratbarang_insert, $req->reviewbarang_insert,$filename, $req->cb_brand,$req->cb_kategori);
        return back();
    }

    public function updatebarang(Request $req){
        $dtbarang = new BarangModel();
        if ($req->urlimageupdate != "") {$filename = $req->urlimageupdate;}
        else{
            if ($req->hasFile('uploadFile_update')) {
                $file = $req->file('uploadFile_update');
                $extension = $file->getClientOriginalExtension();            
                $filename = 'uploads/barang/'.time().'.'.$extension;            
                $file->move('uploads/barang',$filename);
            }
        }           
        $dtbarang->updateBarang($req->id_hidden,$req->nmbarang_update, $req->stokbarang_update, $req->hargaBarang_update, $req->beratbarang_update, $req->reviewbarang_update,$filename, $req->cb_brand,$req->cb_kategori);
        return back();
    }

    public function insertkategori(Request $req){
        $dtkategori = new KategoriModel();        
        $dtkategori->insertKategori($req->nmkategori_insert);        
        return back();
    }
    public function updatekategori(Request $req){
        $dtkategori = new KategoriModel();        
        $dtkategori->updateKategori($req->nmkategori_update,$req->id_hidden);        
        return back();
    }
}
