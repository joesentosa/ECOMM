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
    protected $fillable = ['namaBarang','stok','harga','berat','review','gambar','fk_id_brand','fk_id_kategori','created_at','updated_at'];

    public function insertBarang($nama,$stok,$harga,$berat,$review,$gambar,$idbrand,$idkategori){
        $barang                 = new BarangModel();
        $barang->id_barang      = null;
        $barang->namaBarang     = $nama;
        $barang->stok           = $stok;
        $barang->harga          = $harga;
        $barang->berat          = $berat;
        $barang->review         = $review;
        $barang->gambar         = $gambar;
        $barang->fk_id_brand    = $idbrand;
        $barang->fk_id_kategori = $idkategori;
        $barang->save();
    }
    public function updateBarang($id_hidden,$nmbarang, $stokbarang, $hargaBarang, $beratbarang, $reviewbarang,$filename = null, $cb_brand,$cb_kategori){
        $barang                 = BarangModel::find($id_hidden);
        $barang->namaBarang     = $nmbarang;
        $barang->stok           = $stokbarang;
        $barang->harga          = $hargaBarang;
        $barang->berat          = $beratbarang;
        $barang->review         = $reviewbarang;
        if ($filename != null) {
            $barang->gambar         = $filename;
        }
        $barang->fk_id_brand    = $cb_brand;
        $barang->fk_id_kategori = $cb_kategori;
        $barang->save();
    }
    public function getAllById(){
        return BarangModel::join('brand','brand.id_brand','=','barang.fk_id_brand')
                        ->join('kategori','kategori.id_kategori','=','barang.fk_id_kategori')
                        ->with(['gambar'])
                        ->get(['barang.*', 'brand.namaBrand','kategori.nama_kategori']);
    }
    public function getAll(){
        return BarangModel::all();
    }

    public function gambar()
    {
        return $this->hasMany(GambarModel::class, 'id_gambar', 'fk_id_gambar');
    }    
}
