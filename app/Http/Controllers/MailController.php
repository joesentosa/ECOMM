<?php

namespace App\Http\Controllers;

use App\Mail\PromoMail;
use App\Models\CustomerModel;
use App\Models\PromoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function preview(Request $request)
    {
        $customer = CustomerModel::all();
        $promo = PromoModel::all();
        return new PromoMail($customer[0], $promo[0]);
    }
    public function kirim(Request $request)
    {
        $customers = CustomerModel::all();
        $promo = PromoModel::all();
        foreach ($customers as $customer){
            Mail::to($customer->email)->send(new PromoMail($customer, $promo[0]));
        }

    }
}
