<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\ShippingModel;
use App\Models\PromoModel;
use App\Models\PromoBarangModel;
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
    public function ShippingAdmin(){
        $dtshipping = new ShippingModel();
        return view('__Admin.dashboard.shipping',['data' => $dtshipping->getAll()]);
    }
    public function PromoAdmin(){
        $dtpromo = new PromoModel();
        return view('__Admin.dashboard.promo',['data' => $dtpromo->getAll()]);
    }    
    public function PromoBarangAdmin(){
        $dtpromobarang = new PromoBarangModel();     
        $dtpromo = new PromoModel();
        $dtbarang = new BarangModel();        
        return view('__Admin.dashboard.promo_barang',['data' => $dtpromobarang->getAll(),'promo' => $dtpromo->getAll(),'barang'=> $dtbarang->getAll()]);
    }
    
    // ==========================================
    // BRAND
    // ==========================================
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
    // ==========================================

    // ==========================================
    //  BARANG
    // ==========================================
    public function reviewBarang($id){        
        $barang = BarangModel::find($id);
        return response()->json([
            "status" => 200,
            "data" => $barang
        ]);
    }
    public function insertbarang(Request $req){
        $dtbarang = new BarangModel();     
        dd($req->file('filepond_insert'));
        if ($req->hasFile('filepond_insert')) {
            $file = $req->file('filepond_insert');            
            // $extension = $file->getClientOriginalExtension();            
            // $filename = 'uploads/barang/'.time().'.'.$extension;            
            // $file->move('uploads/barang',$filename);
        }        
        // $dtbarang->insertBarang($req->nmbarang_insert, $req->stokbarang_insert, $req->hargaBarang_insert, $req->beratbarang_insert, $req->reviewbarang_insert,$filename, $req->cb_brand,$req->cb_kategori);
        return back();
    }

    public function updatebarang(Request $req){
        $dtbarang = new BarangModel();
        $filename=null;
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
    public function uploadImageBarang(Request $request){
        $dtgambar = new GambarModel();
        if ($request->hasFile('filepond_insert')) {
            foreach ($request->file('filepond_insert') as $items) {
                $extension = $items->getClientOriginalExtension();            
                $filename = 'uploads/barang/'.time().'.'.$extension;            
                $dtgambar->
                $file->move('uploads/barang',$filename);
            }
        }
    }

    // ==========================================
    // KATEGORI
    // ==========================================
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
    public function deletekategori(Request $req){
        $dtkategori = new KategoriModel();
        $dtkategori->deleteKategori($req->id_kategori);
        return response()->json([
            'status' => 200,            
        ]);
    }
    // ==========================================

    // ==========================================
    // SHIPPING
    // ==========================================
    public function insertshipping(Request $req){
        $dtshipping = new ShippingModel();
        $dtshipping->insertShipping($req->kotatujuan_insert, $req->kurir_insert, $req->jenislayanan_insert, $req->tarif_insert);
        return back();
    }
    public function updateshipping(Request $req){
        $dtshipping = new ShippingModel();
        $dtshipping->updateShipping($req->id_hidden, $req->kotatujuan_update, $req->kurir_update, $req->jenislayanan_update, $req->tarif_update);
        return back();
    }
    public function deleteshipping(Request $req){
        $dtshipping = new ShippingModel();
        $dtshipping->deleteShipping($req->id_shipping);
        return response()->json([
            'status'    => 200,
        ]);
    }
    // ==========================================

    // ==========================================
    //  PROMO
    // ==========================================
    public function insertpromo(Request $req){
        $dtpromo = new PromoModel();
        $splitDate = explode('-',$req->rangedatepromo_insert);                
        $dtpromo->insertPromo(date('Y-m-d',strtotime($splitDate[0])),date('Y-m-d',strtotime($splitDate[1])),$req->hargapromo_insert);
        return back();
    }
    public function updatepromo(Request $req){
        $dtpromo = new PromoModel();
        $splitDate = explode('-',$req->rangedatepromo_update);  
        // dd($req->harga_update);
        $dtpromo->updatePromo($req->id_hidden,date('Y-m-d',strtotime($splitDate[0])),date('Y-m-d',strtotime($splitDate[1])),$req->hargapromo_update);
        return back();
    }
    public function deletepromo(Request $req){
        $dtpromo = new PromoModel();
        $dtpromo->deletePromo($req->id_promo);
        return response()->json([
            'status' => 200
        ]);
    }
    // ==========================================

    // ==========================================
    //  PROMO BARANG
    // ==========================================
    public function insertpromobarang(Request $req){
        $dtpromobarang = new PromoBarangModel();
        $dtpromobarang->insertPromoBarang($req->cb_promo,$req->cb_barang);
        return back();
    }
    public function updatepromobarang(Request $req){
        $dtpromobarang = new PromoBarangModel();
        $dtpromobarang->updatePromoBarang($req->id_hidden,$req->cb_promo_update,$req->cb_barang_update);
        return back();
    }
    public function deletepromobarang(Request $req){
        $dtpromobarang = new PromoBarangModel();
        $dtpromobarang->deletePromoBarang($req->id_promoBarang);
        return response()->json([
            'status' => 200,
        ]);
    }
    // ==========================================

}
