<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WishlistModel extends Model
{
    use HasFactory;

    public $table       = "wishlist";
    public $primaryKey  = "id_wishlist";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = [ 'fk_id_barang','fk_id_customer','created_at','updated_at'];

    public function insertWishlist($idbarang, $idcustomer){
        $wishlist                = new WishlistModel();
        $wishlist->id_wishlist   = null;
        $wishlist->fk_id_barang  = $idbarang;
        $wishlist->fk_id_customer= $idcustomer;           
        $wishlist->created_at    = null;
        $wishlist->updated_at    = null;
        $wishlist->save();
    }

    public function deleteWishlist($id_kategori){
        return WishlistModel::find($id_kategori)->delete();
    }
}
