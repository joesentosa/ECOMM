<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "kategori";
    public $primaryKey  = "id_kategori";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['nama_kategori','created_at','updated_at'];

    public function insertKategori($nmKategori){
        $kategori               = new KategoriModel();
        $kategori->id_kategori  = null; 
        $kategori->nama_kategori= $nmKategori;                
        $kategori->save();
    }
    public function getAll(){
        return KategoriModel::all();
    }
    public function updateKategori($nmkategori,$id_hidden){
        $kategori               = KategoriModel::find($id_hidden);        
        $kategori->nama_kategori= $nmkategori;                
        $kategori->save();
    }
}
