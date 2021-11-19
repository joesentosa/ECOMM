<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "shipping";
    public $primaryKey  = "id_shipping";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = [ 'kotaTujuan','kurir','jenisLayanan','tarif','created_at','updated_at'];

    public function insertShipping($kotaTujuan, $kurir, $jenislayanan, $tarif){
        $shipping              = new ShippingModel();        
        $shipping->kotaTujuan  = $kotaTujuan;
        $shipping->kurir       = $kurir;   
        $shipping->jenislayanan= $jenislayanan;
        $shipping->tarif       = $tarif;        
        $shipping->save();        
    }
    public function updateShipping($id_hidden, $kotatujuan_update, $kurir_update, $jenislayanan_update, $tarif_update){
        $data              = ShippingModel::find($id_hidden);        
        $data->kotaTujuan  = $kotatujuan_update;
        $data->kurir       = $kurir_update;   
        $data->jenislayanan= $jenislayanan_update;
        $data->tarif       = $tarif_update;        
        $data->save(); 
    }
    public function deleteShipping($id_shipping){        
        return ShippingModel::find($id_shipping)->delete();        
    }
    public function getAll(){
        return ShippingModel::all();
    }
}
