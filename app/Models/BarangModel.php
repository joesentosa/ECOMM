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
    protected $fillable = ['namaBarang','stok','harga','berat','review','fk_id_brand','fk_id_kategori'];


    public function insertBarang($nama,$stok,$harga,$berat,$review,$idbrand,$idkategori){
        $barang                 = new BarangModel();
        $barang->id_barang      = null;
        $barang->namaBarang     = $nama;
        $barang->stok           = $stok;
        $barang->harga          = $harga;
        $barang->berat          = $berat;
        $barang->review         = $review;
        $barang->fk_id_brand    = $idbrand;
        $barang->fk_id_kategori = $idkategori;
        $barang->save();
        return $barang->id_barang;
    }
    public function updateBarang($id_hidden,$nmbarang, $stokbarang, $hargaBarang, $beratbarang, $reviewbarang, $cb_brand,$cb_kategori){
        $barang                 = BarangModel::find($id_hidden);
        $barang->namaBarang     = $nmbarang;
        $barang->stok           = $stokbarang;
        $barang->harga          = $hargaBarang;
        $barang->berat          = $beratbarang;
        $barang->review         = $reviewbarang;
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
    public static function getByName($name){
        return BarangModel::join('brand','brand.id_brand','=','barang.fk_id_brand')
                        ->join('kategori','kategori.id_kategori','=','barang.fk_id_kategori')
                        ->with(['gambar'])
                        ->where('barang.namaBarang',$name)
                        ->get();
    }
    public static function getAll(){
        return BarangModel::with(['gambar','promos','kategori'])->get();
    }

    public function deleteBarangItems($id){
        return BarangModel::find($id)->delete();
    }

    public function gambar()
    {
        return $this->hasMany(GambarModel::class, 'id_barang', 'id_barang'); // (models, table gambar, table barang)
    }

    public function kategori()
    {
        return $this->hasOne(KategoriModel::class, 'id_kategori', 'fk_id_kategori');
    }

    public function promos()
    {
        return $this->belongsToMany(PromoModel::class, 'promo_barang', 'fk_id_barang', 'fk_id_promo');
    }
}
