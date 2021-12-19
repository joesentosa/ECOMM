<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class HorderModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = "horder";
    public $primaryKey = "id_order";
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'id_order', 'tanggal_trans', 'subtotal',
        'metode_pembayaran', 'statusOrder', 'kurir',
        'jenis_layanan', 'total_shipping', 'fullname',
        'address', 'city', 'phone', 'email', 'order_notes',
        'created_at', 'updated_at'
    ];

    public function saveData($id_order, $tgltrans, $subtotal, $metodePay, $statusorder, $kurir, $jenisLayanan, $shipping)
    {
        $horder = new HorderModel();
        $horder->id_order = $id_order;
        $horder->tanggal_trans = $tgltrans;
        $horder->subtotal = $subtotal;
        $horder->metode_pembayaran = $metodePay;
        $horder->statusOrder = $statusorder;
        $horder->kurir = $kurir;
        $horder->jenis_layanan = $jenisLayanan;
        $horder->total_shipping = $shipping;
        $horder->save();
        return $horder;
    }
    public function getAll(){
        return HorderModel::all();
    }    
    // tanggal transaksi, id_order, subtotal
    public static function pendapatanPerBulan(){
        return DB::table('horder')
                        ->select(DB::raw('MONTHNAME(horder.tanggal_trans) as Bulan'),DB::raw('COUNT(*) as count_per_bulan'),DB::raw('SUM(horder.subtotal) as subperbulan'))
                        ->groupBy(DB::raw('MONTHNAME(horder.tanggal_trans)'))                                                
                        ->get();  
    }
}
