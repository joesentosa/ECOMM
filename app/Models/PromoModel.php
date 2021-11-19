<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "promo";
    public $primaryKey  = "id_promo";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['firstDate','expiredDate','hargaPromo','created_at','updated_at'];

    public function insertPromo($firstDate,$expiredDate,$harga){
        $promo               = new PromoModel();        
        $promo->firstDate    = $firstDate;
        $promo->expiredDate  = $expiredDate;    
        $promo->hargaPromo   = $harga;            
        $promo->save();
    }
    public function updatePromo($id_promo,$firstDate_update,$expiredDate_update,$harga_update){
        $data = PromoModel::find($id_promo);
        $promo->firstDate    = $firstDate_update;
        $promo->expiredDate  = $expiredDate_update;    
        $promo->hargaPromo   = $harga_update;            
        $promo->save();
    }
    public function deletePromo($id_promo){
        return PromoModel::find($id_promo)->delete();
    }
    public function getAll(){
        return PromoModel::all();
    }
}
