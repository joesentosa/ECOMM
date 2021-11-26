<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\BrandModel;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog(){
        $dtkategori = new KategoriModel();        
        $dtbrand    = BrandModel::limit(5)->get();
        return view('__User.dashboard.catalog',['data_kategori'=>$dtkategori->getAll(),'data_brand' => $dtbrand]);
    }
}
