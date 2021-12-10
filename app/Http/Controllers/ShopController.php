<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
        $customer = Auth::user();

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
        return view('__User.dashboard.cart', compact('carts', 'customer'));
    }

    public function checkout(Request $request)
    {
        $request->validate([]);

        // Assuming all the item is in the session
        // check if shipping is needed in the session

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

    public function submit_shipping(Request $request)
    {
        // ToDo: Add validation of shipping price
    }

    public function calculate_shipping(Request $request)
    {
        $provinsi = $request->provinsi ?? null;
        $kota = $request->kota ?? null;

        if (!$provinsi) { abort(400); }

        $headers = [
            'key' => env('RAJA_ONGKIR_API_KEY'),
            'content-type' => "application/x-www-form-urlencoded"
        ];

        if (!$kota)
        {
            // URL
            $apiURL = 'https://api.rajaongkir.com/starter/city?province=' . $provinsi;

            $response = Http::withHeaders($headers)->get($apiURL);
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            if ($statusCode == 200)
            {
                $tmp_res = array();
                foreach($responseBody["rajaongkir"]["results"] as $data)
                {
                    array_push($tmp_res, array(
                        "city_id" => $data['city_id'],
                        "province" => $data['province'],
                        "type" => $data['type'],
                        "city_name" => $data['city_name'],
                        "postal_code" => $data['postal_code'],
                    ));
                }
                return response()->json($tmp_res, 200);
            }
        }

        $courier = $request->courier;

        // URL
        $apiURL = 'https://api.rajaongkir.com/starter/cost';
        $postBody = [
            "origin" => "444",
            "destination" => $kota,
            "weight" => 1700,
            "courier" => $courier
        ];

        $response = Http::asForm()->withHeaders($headers)->post($apiURL, $postBody);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        if ($statusCode == 200)
        {
            $tmp_res = array();
            foreach($responseBody["rajaongkir"]["results"] as $data)
            {
                foreach($data["costs"] as $data_detail)
                {
                    array_push($tmp_res, array(
                        "service" => $data_detail['service'],
                        "description" => $data_detail['description'],
                        "cost" => $data_detail['cost'][0]['value'],
                        "estimated" => $data_detail['cost'][0]['etd'],
                        "note" => $data_detail['cost'][0]['note'],
                    ));
                }
            }
            return response()->json($tmp_res, 200);
        }

        return response()->json(['message' => 'failed to fetch data'], 200);
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
