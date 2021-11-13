<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DorderModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table           = "dorder";
    public $primaryKey      = "id_dorder";
    public $incrementing    = true;
    public $timestamps      = true;
    protected $fillable     = ['id_dorder','qty', 'total', 'fk_id_barang','created_at','updated_at','deleted_at'];

    public function saveData($iddorder,$qty,$total,$idbarang){
        $dorder                = new DorderModel();
        $dorder->id_dorder     = $iddorder;
        $dorder->qty           = $qty; 
        $dorder->total         = $total;
        $dorder->fk_id_barang  = $idbarang;        
        $dorder->created_at    = null;
        $dorder->updated_at    = null;
        $dorder->deleted_at    = null;
        $dorder->save();
    }
}
