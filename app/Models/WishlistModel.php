<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "wishlist";
    public $primaryKey  = "id_wislist";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = [ 'fk_id_barang','fk_id_customer','created_at','updated_at','deleted_at'];

    public function saveData($idbarang, $idcustomer){
        $wishlist                = new WishlistModel();
        $wishlist->id_wishlist   = null;
        $wishlist->fk_id_barang  = $idbarang;
        $wishlist->fk_id_customer= $idcustomer;           
        $shipping->created_at    = null;
        $shipping->updated_at    = null;
        $shipping->deleted_at    = null;
        $shipping->save();
    }
}
