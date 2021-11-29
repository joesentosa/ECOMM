<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\ShippingModel;
use App\Models\PromoModel;
use App\Models\GambarModel;
use App\Models\AdminModel;
use App\Models\CustomerModel;
use App\Models\PromoBarangModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
    public function AdminUser(){
        $dtuseradmin = new AdminModel();
        return view('__Admin.dashboard.useradmin',['data' => $dtuseradmin->getAll()]);
    }
    public function Customer(){
        $dtcustomer = new CustomerModel();
        return view('__Admin.dashboard.customer',['data'=>$dtcustomer->getAll()]);
    }
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
            if ($req->hasFile('upload_imgs_update')) {
                $file = $req->file('upload_imgs_update');
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
            if ($req->hasFile('upload_imgs_insert')) {
                $file = $req->file('upload_imgs_insert');
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

    public function insertbarang(Request $req){
        $dtbarang = new BarangModel();
        $dtgambar = new GambarModel();                  
        $idbarang = $dtbarang->insertBarang($req->nmbarang_insert, $req->stokbarang_insert, $req->hargaBarang_insert, $req->beratbarang_insert, $req->reviewbarang_insert, $req->cb_brand,$req->cb_kategori);        
        if ($req->hasFile('upload_imgs_insert')) {                        
            foreach ($req->file('upload_imgs_insert') as $image) {
                $extension = $image->getClientOriginalExtension();            
                $filename = $this->generateFileName('gambar_barang',$extension);                   
                $image->move('uploads/barang',$filename);
            
                $dtgambar->insertGambar($idbarang,'uploads/barang/'.$filename);
            }  
        }                
        return back();
    }

    public function updatebarang(Request $req){
        $dtbarang = new BarangModel();
        $dtgambar = new GambarModel();                       
        if ($req->hasFile('upload_imgs_update')) {
            foreach ($req->file('upload_imgs_update') as $image) {
                $extension = $key->getClientOriginalExtension();            
                $filename = 'uploads/barang/'.time().'.'.$extension;            
                // $image->move('uploads/barang',$filename);
                // $dtgambar->updateBarang($idbarang,'uploads/barang/'.$filename);
            }                                
        }                               
        $dtbarang->updateBarang($req->id_hidden,$req->nmbarang_update, $req->stokbarang_update, $req->hargaBarang_update, $req->beratbarang_update, $req->reviewbarang_update,$filename, $req->cb_brand,$req->cb_kategori);
        return back();
    }
    public function deletebarang(Request $req){
        
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

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateFileName($typeFile,$extension){
        $date = Carbon::now()->format('Ymd');
        $rnd = $this->generateRandomString(8);
        $filename = $typeFile.'_'.$date.$rnd.'.'.$extension;
        return $filename;
    }

    // ==========================================
    //  USER ADMIN
    // ==========================================
    public function insertuseradmin(Request $req){
        $dtuseradmin = new AdminModel();
        $dtuseradmin->insertUserAdmin($req->username_insert,$req->email_insert,$req->notlp_insert,Hash::make($req->password_insert));
        return back();
    }
    public function updateuseradmin(Request $req){
        $dtuseradmin = new AdminModel();
        $dtuseradmin->updateUserAdmin($req->id_hidden,$req->username_update,$req->email_update,$req->notlp_update,Hash::make($req->password_update));
        return back();
    }
    public function deleteuseradmin(Request $req){
        $dtuseradmin = new AdminModel();
        $dtuseradmin->deleteUserAdmin($req->id_useradmin);
        return response()->json([
            'status' => 200
        ]);
    }
    // ==========================================
}
