<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HorderModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table           = "horder";
    public $primaryKey      = "id_horder";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['id_horder','tanggal_trans', 'subtotal', 'grandtotal', 'metode_pembayaran', 'statusOrder', 'fk_id_shipping', 'fk_id_dorder','created_at','updated_at','deleted_at'];

    public function saveData($idhorder,$tgltrans,$subtotal,$grandtotal,$metodePay,$statusorder,$idshipping,$iddorder){
        $horder                    = new HorderModel();
        $horder->id_horder         = $idhorder;
        $horder->tgltrans          = $tgltrans; 
        $horder->subtotal          = $subtotal;
        $horder->grandtotal        = $grandtotal;
        $horder->metode_pembayaran = $metodePay;
        $horder->statusOrder       = $statusorder;        
        $horder->fk_id_shipping    = $idshipping;
        $horder->fk_id_dorder      = $iddorder;
        $horder->created_at        = null;
        $horder->updated_at        = null;
        $horder->deleted_at        = null;
        $horder->save();
    }
}
