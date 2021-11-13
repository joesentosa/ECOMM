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
    protected $fillable = [ 'kotaTujuan','kurir','jenisLayanan','tarif','created_at','updated_at','deleted_at'];

    public function saveData($kotaTujuan, $kurir, $jenislayanan, $tarif){
        $shipping              = new ShippingModel();
        $shipping->id_shipping = null;
        $shipping->kotaTujuan  = $kotaTujuan;
        $shipping->kurir       = $kurir;   
        $shipping->jenislayanan= $jenislayanan;
        $shipping->tarif       = $tarif;
        $shipping->created_at  = null;
        $shipping->updated_at  = null;
        $shipping->deleted_at  = null;
        $shipping->save();
    }
}
