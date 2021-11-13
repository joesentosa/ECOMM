<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "barang";
    public $primaryKey  = "id_barang";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['namaBarang','stok','harga','berat','gambar','deskripsi','fk_id_brand','fk_id_kategori','fk_id_promo','created_at','updated_at','deleted_at'];

    public function saveData($nama,$stok,$harga,$berat,$gambar,$deskripsi,$idbrand,$idkategori,$idpromo,$idreview){
        $barang                 = new BarangModel();
        $barang->id_barang      = null;
        $barang->namaBarang     = $nama;
        $barang->stok           = $stok;
        $barang->harga          = $harga;
        $barang->berat          = $berat;
        $barang->gambar         = $gambar;
        $barang->deskripsi      = $deskripsi;
        $barang->fk_id_brand    = $idbrand;
        $barang->fk_id_kategori = $idkategori;
        $barang->fk_id_promo    = $idpromo;        
        $barang->created_at     = null;
        $barang->updated_at     = null;
        $barang->deleted_at     = null;
        $barang->save();
    }
    public function getAll(){
        return BarangModel::join('brand','fk_id_brand','=','brand.id_brand')
                        ->join('kategori','fk_id_kategori','=','kategori.id_kategori');
    }

}
