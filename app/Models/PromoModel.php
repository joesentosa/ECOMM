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
    protected $fillable = ['firstDate','expiredDate','hargaPromo','created_at','updated_at','deleted_at'];

    public function saveData($firstDate,$expiredDate,$harga){
        $promo               = new PromoModel();
        $promo->id_promo     = null; 
        $promo->firstDate    = $firstDate;
        $promo->expiredDate  = $expiredDate;    
        $promo->hargaPromo   = $harga;    
        $promo->created_at   = null;
        $promo->updated_at   = null;
        $promo->deleted_at   = null;
        $promo->save();
    }
}
