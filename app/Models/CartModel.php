<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    public $table       = "cart";
    public $primaryKey  = "id";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['id_customer','id_brand','id_barang','updated_at'];

}
