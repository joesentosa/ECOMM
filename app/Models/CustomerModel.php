<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticates;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;

class CustomerModel extends Authenticates
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    public $table       = "customer";
    public $primaryKey  = "id_customer";
    public $incrementing= true;
    public $timestamps  = true;
    protected $fillable = ['username','firstname','lastname','email','address','kota','kodeZip','google_id','password'];
    protected $hidden = ['google_id', 'password', 'remember_token'];

    public function saveData($username,$firstname,$lastname,$email,$address,$kota,$kodezip,$password){
        $customer                 = new CustomerModel();
        $customer->firstname      = $firstname;
        $customer->lastname       = $lastname;
        $customer->username       = $username;
        $customer->email          = $email;
        $customer->address        = $address;
        $customer->kota           = $kota;
        $customer->kodeZip        = $kodezip;
        $customer->password       = Hash::make($password);
        $customer->save();
    }
    public function getAll(){
        return CustomerModel::all();
    }
}
