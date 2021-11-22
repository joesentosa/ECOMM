<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticates;
use Illuminate\Support\Facades\Hash;

class CustomerModel extends Authenticates
{
    use HasFactory;
    use SoftDeletes;

    public $table       = "customer";
    public $primaryKey  = "id_customer";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['username','firstName','lastName','email','address','kota','kodeZip'];
    protected $hidden = ['password', 'remember_token'];

    public function saveData($username,$firstname,$lastname,$email,$address,$kota,$kodezip,$password){
        $customer                 = new CustomerModel();
        //$customer->id_customer    = null;
        $customer->firstname      = $firstname;
        $customer->lastname       = $lastname;
        $customer->username       = $username;
        $customer->email          = $email;
        $customer->address        = $address;
        $customer->kota           = $kota;
        $customer->kodeZip        = $kodezip;
        $customer->password       = Hash::make($password);
        //$customer->created_at     = null;
        //$customer->updated_at     = null;
        //$customer->deleted_at     = null;
        $customer->save();
    }
}
