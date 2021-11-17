<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticates;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminModel extends Authenticates
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "admin";
    public $primaryKey  = "id";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['username','email','no_tlp','password','created_at','updated_at'];

    public function saveData($username,$email,$tlp,$password){
        $admin             = new AdminModel();
        $admin->id         = null;
        $admin->username   = $username;
        $admin->email      = $email;
        $admin->no_tlp     = $tlp;
        $admin->password   = $password;
        $admin->created_at = null;
        $admin->updated_at = null;
        $admin->deleted_at = null;
        $admin->save();
    }
}
