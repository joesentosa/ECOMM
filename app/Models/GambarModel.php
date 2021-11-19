<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarModel extends Model
{
    use HasFactory;

    public $table       = "barang_gambar";
    public $primaryKey  = "id_gambar";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['id_barang', 'gambar'];

    public function insertBarang($gambar){
        $barang             = new GambarModel();
        $barang->gambar     = $gambar;
        $barang->save();
    }

    public function updateBarang($id_hidden, $gambar){
        $barang             = GambarModel::find($id_hidden);
        $barang->gambar     = $gambar;
        $barang->save();
    }

    public function barang()
    {
        return $this->belongsTo(BarangModel::class, 'id_barang', 'id_barang');
    }

    public function getAll(){
        return GambarModel::all();
    }
}
