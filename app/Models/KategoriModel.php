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
    protected $fillable = ['nama_kategori','fk_id_brand','created_at','updated_at','deleted_at'];

    public function saveData($kategori,$idbrand){
        $kategori               = new KategoriModel();
        $kategori->id_kategori  = null; 
        $kategori->nama_kategori= $kategori;
        $kategori->fk_id_brand  = $idbrand;        
        $kategori->created_at   = null;
        $kategori->updated_at   = null;
        $kategori->deleted_at   = null;
        $kategori->save();
    }
}
