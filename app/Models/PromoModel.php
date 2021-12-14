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
    protected $fillable = ['firstDate','expiredDate','potonganHarga','created_at','updated_at'];

    public function insertPromo($namaPromo,$firstDate,$expiredDate,$harga){
        $promo                  = new PromoModel();
        $promo->namaPromo       = $namaPromo;
        $promo->firstDate       = $firstDate;
        $promo->expiredDate     = $expiredDate;
        $promo->potonganHarga   = $harga;
        $promo->save();
    }
    public function updatePromo($id_promo,$namaPromo,$firstDate_update,$expiredDate_update,$harga_update){

        $data = PromoModel::find($id_promo);
        $data->namaPromo       = $namaPromo;
        $data->firstDate       = $firstDate_update;
        $data->expiredDate     = $expiredDate_update;
        $data->potonganHarga   = $harga_update;
        $data->save();
    }
    public function deletePromo($id_promo){
        return PromoModel::find($id_promo)->delete();
    }
    public function getAll(){
        return PromoModel::all();
    }

    public function barang()
    {
        return $this->belongsToMany(BarangModel::class, 'promo_barang', 'fk_id_promo', 'fk_id_promo');
    }
}
