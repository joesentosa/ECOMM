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

    public function insertBrand($filename,$nmbrand){
        $brand                 = new BrandModel();
        $brand->id_brand       = null;
        $brand->namaBrand      = $nmbrand; 
        $brand->gambar         = $filename;               
        $brand->save();
    }
    public function getAll(){
        return BrandModel::all();
    }

    public function updateBrand($filename,$nmbrand,$id_hidden){
        $data = BrandModel::find($id_hidden);
        $data->namaBrand = $nmbrand;
        $data->gambar = $filename;
        $data->save();
    }
    public function deleteBrand($id_brand){
        return BrandModel::find($id_brand)->delete();
    }
}
