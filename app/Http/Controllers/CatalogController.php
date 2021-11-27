<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\BrandModel;
use App\Models\BarangModel;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog(){
        $dtkategori = new KategoriModel();        
        $dtbrand    = BrandModel::limit(5)->get();
        $dtbarang   = BarangModel::get();
        // $selectKategori = BarangModel::whereIn("fk_id_kategori", $dtkategori->id_kategori)->get();

        return view('__User.dashboard.catalog',[
            'data_kategori'=>$dtkategori->getAll(),
            'data_brand' => $dtbrand,
            'data_barang' => $dtbarang]);
    }
}
