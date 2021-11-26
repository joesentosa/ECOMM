<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog(){
        $dtkategori = new KategoriModel();        
        return view('__User.dashboard.catalog',['data_kategori'=>$dtkategori->getAll()]);
    }
}
