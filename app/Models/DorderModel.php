<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class DorderModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table           = "dorder";
    public $primaryKey      = "id_order";
    public $incrementing    = false;
    public $timestamps      = true;
    protected $fillable     = ['id_order','qty', 'total', 'fk_id_barang','created_at','updated_at'];

    public function saveData($iddorder,$qty,$total,$idbarang){
        $dorder                = new DorderModel();
        $dorder->id_order      = $iddorder;
        $dorder->qty           = $qty;
        $dorder->total         = $total;
        $dorder->fk_id_barang  = $idbarang;
        $dorder->save();
    }
    public function getAll(){
        return DorderModel::join('barang','barang.id_barang','=','dorder.fk_id_barang')->get(['dorder.*','barang.namaBarang']);
    }  

    public static function barangLaris(){
        return DB::table('dorder')
                        ->select('barang.id_barang','barang.namaBarang','barang.harga','dorder.fk_id_barang',DB::raw('SUM(dorder.qty) as TOTAL'))
                        ->join('barang','barang.id_barang','=','dorder.fk_id_barang')
                        ->groupBy('dorder.fk_id_barang','barang.harga','barang.namaBarang','barang.id_barang')
                        ->orderBy('dorder.qty','desc')
                        ->limit(6)
                        ->get();  
    }

}
