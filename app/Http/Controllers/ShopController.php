<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class ShopController extends Controller
{
    public function __construct()
    {
        // Set your Merchant Server Key
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        // Add new notification url(s) alongside the settings on Midtrans Dashboard Portal (MAP)
        Config::$appendNotifUrl = "http://127.0.0.1:8000/test1";
        // Use new notification url(s) disregarding the settings on Midtrans Dashboard Portal (MAP)
//        Config::$overrideNotifUrl = "https://example.com/test1";
    }

    public function cart(Request $request)
    {
        // get barang from session
        $tmp_data = $request->session()->get('cart_barang') ?? [];
        $carts = array();
        // find each barang and assign to cariable carts
        foreach($tmp_data as $data){
            $data_barang = BarangModel::where('id_barang', $data['id'])->with(['gambar'])->first();

            array_push($carts, array(
                'data' => $data_barang,
                'qty' => $data['qty']
            ));
        }
        // use compact to serve the data
        return view('__User.dashboard.cart', compact('carts'));
    }

    public function checkout(Request $request)
    {
        $clientKey = env('MIDTRANS_CLIENT_KEY');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            )
        );

        $snapToken = Snap::getSnapToken($params);



        return view('__User.dashboard.checkout', compact('snapToken', 'clientKey'));
    }

    public function viewCheckout(Request $request)
    {
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            )
        );

        $snapToken = Snap::getSnapToken($params);

        return view('__User.dashboard.demo_payment', compact('snapToken'));
    }
}
