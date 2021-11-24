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
    
    public function insertUserAdmin($username,$email,$tlp,$password){
        $admin             = new AdminModel();        
        $admin->username   = $username;
        $admin->email      = $email;
        $admin->no_tlp     = $tlp;
        $admin->password   = $password;        
        $admin->save();
    }
    public function updateUserAdmin($id_hidden,$username_update,$email_update,$notlp_update,$password_update){
        $data             = AdminModel::find($id_hidden);        
        $data->username   = $username_update;
        $data->email      = $email_update;
        $data->no_tlp     = $notlp_update;
        $data->password   = $password_update;        
        $data->save();
    }
    public function deleteUserAdmin($id_useradmin){
        return AdminModel::find($id_useradmin)->delete();                
    }
    public function getAll(){
        return AdminModel::withTrashed()->get();
    }
}
