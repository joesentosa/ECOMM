<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "brand";
    public $primaryKey  = "id_brand";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['namaBrand','gambar','created_at','updated_at'];

    public function saveData($nama,$gambar){
        $brand                 = new BrandModel();
        $brand->id_brand       = null;
        $brand->namaBrand      = $nama; 
        $brand->gambar         = $gambar;       
        $brand->created_at     = null;
        $brand->updated_at     = null;
        $brand->deleted_at     = null;
        $brand->save();
    }
    public function getAll(){
        return BrandModel::all();
    }
}
