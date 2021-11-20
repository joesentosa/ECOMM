<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BarangModel;
use App\Models\PromoModel;

class PromoBarangModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "promo_barang";
    public $primaryKey  = "id_promo_barang";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['fk_id_barang','fk_id_promo','created_at','updated_at'];

    public function insertPromoBarang($cb_promo,$cb_barang){
        $data = new PromoBarangModel();
        $data->fk_id_barang = $cb_barang;
        $data->fk_id_promo = $cb_promo;
        $data->save();
    }
    public function updatePromoBarang($id_hidden,$cb_promo,$cb_barang){
        $data = PromoBarangModel::find($id_hidden);
        $data->fk_id_barang = $cb_barang;
        $data->fk_id_promo = $cb_promo;
        $data->save();
    }
    public function deletePromoBarang($id_promobarang){
        $data = PromoBarangModel::find($id_promobarang);
        $data->delete();
    }

    // PromoBarang mau nyambungno ke barang -> 
    // belongsTo -> user pny profile  -> user hasOne profile <- profile belongsTo user
    public function barang(){
        return $this->hasOne(BarangModel::class,'id_barang','fk_id_barang');
    }
    public function promo(){
        return $this->hasOne(PromoModel::class,'id_promo','fk_id_promo');
    }
    public function getAll(){
        return PromoBarangModel::with(['barang','promo'])->get();
    }
}
