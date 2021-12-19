<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\DorderModel;
use App\Models\HorderModel;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Midtrans\Config;
use Midtrans\Snap;
use App\Rules\CheckPhone;

class ShopController extends Controller
{
    // global variable
    // price_service -> array (hold data from shipping)
    /* contoh prive_service
     * { "service" => "Paket Kilat Khusus", "description" => "Paket Kilat Khusus", "cost" => "28000",
     *   "estimated" => "2 HARI", "note" => null, "provinsi" => "6", "kota" => "153", "courier" => "pos" }
     * */
    // cart_barang -> array (hold barang_id for cart)

    public function testRemoveSessionButAuth()
    {
        $user = Auth::user();
        Session::flush();
        Auth::login($user);
    }

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
        // Config::$overrideNotifUrl = "https://example.com/test1";
    }

    public function cart(Request $request)
    {
        $customer = Auth::user();

        // get barang from session
        $tmp_data = $request->session()->get('cart_barang') ?? [];
        $carts = array();

        $subtotal = 0;
        $shipping_rate = $request->session()->get('price_service')['cost'] ?? 0;

        // find each barang and assign to cariable carts
        foreach ($tmp_data as $data) {
            $data_barang = BarangModel::where('id_barang', $data['id'])->with(['gambar','promos'])->first();
            if (isset($data_barang->promos[0]))
            {
                $subtotal += ($data_barang->harga - $data_barang->promos[0]->potonganHarga) * $data['qty'];
            }
            else
            {
                $subtotal += $data_barang->harga * $data['qty'];
            }
            array_push($carts, array(
                'data' => $data_barang,
                'qty' => $data['qty']
            ));
        }

        // use compact to serve the data
        return view('__User.dashboard.cart', compact('carts', 'customer', 'subtotal', 'shipping_rate'));
    }

    public function checkout(Request $request)
    {
        $clientKey = env('MIDTRANS_CLIENT_KEY');

        if (Auth::guest()) {
            return redirect()->route('page.login.customer', ['referer' => 'cart']);
        }

        // check if shipping array in session is populated
        // if not return back with error
        if (!$request->session()->has('price_service')) {
            return back()->withErrors(['errors' => 'Please select a shipping service']);
        }

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => [
                'required',
                'numeric',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10'
            ],
            'email' => 'required|email:rfc,dns',
        ]);

        // Assuming all the item is in the session
        // check if shipping is needed in the session
        // todo Check if null
        $tmp_items = $request->session()->get('cart_barang');
        $tmp_shipping = $request->session()->get('price_service');

        // order_id
        $order_id = 'H' . quickRandom(11);

        $subtotal = 0;
        $shipping_cost = (int)$tmp_shipping["cost"];
        $barangs = array();
        foreach ($tmp_items as $items) {
            $data_barang = BarangModel::where('id_barang', $items['id'])->with(['promos'])->first();
            if (isset($data_barang->promos[0]))
            {
                $harga_total = ($data_barang->harga - $data_barang->promos[0]->potonganHarga) * $items['qty'];
            }
            else
            {
                $harga_total = $data_barang->harga * $items['qty'];
            }
            $subtotal += $harga_total;
            $data_barang->qty = $items['qty'];
            $data_barang->harga_total = $harga_total;

            DorderModel::updateOrCreate(['id_order' => $order_id],[
                'qty' => $data_barang->qty,
                'total' => $harga_total,
                'fk_id_barang' => $items['id']
            ]);

            array_push($barangs, $data_barang);
        }
        $customer  = Auth::user();
        HorderModel::updateOrCreate(['id_order' => $order_id], [
            'tanggal_trans' => Carbon::now(), 'subtotal' => $subtotal,
            'metode_pembayaran' => '', 'statusOrder' => 0,
            'total_shipping' => $tmp_shipping['cost'],
            'kurir' => $tmp_shipping['courier'],
            'jenis_layanan' => $tmp_shipping['service'],
            'fullname' => $request->firstname . " " . $request->lastname,
            'address' => $request->address,
            'city' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email,
            'order_notes' => $request->order_note,
        ]);

        // todo get barang from session into this crap :v
        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id, // todo change this to get orderid from database
                'gross_amount' => (int)$subtotal + $shipping_cost, // subtotal
            )
        );

        $snapToken = Snap::getSnapToken($params);

        return view('__User.dashboard.checkout',
            compact('snapToken', 'clientKey', 'barangs', 'subtotal', 'shipping_cost', 'order_id'));
    }

    public function submit_shipping(Request $request)
    {
        // ToDo: Add validation of shipping price
        $tmp_services = array();
        foreach ($request->cross_data as $service) {
            if ($service["service"] == $request->services) {
                $tmp_services = $service;
                break;
            }
        }
        $tmp_services['provinsi'] = $request->provinsi;
        $tmp_services['kota'] = $request->kota;
        $tmp_services['courier'] = $request->courier;

        $request->session()->put('price_service', $tmp_services);
    }

    public function calculate_shipping(Request $request)
    {
        $provinsi = $request->provinsi ?? null;
        $kota = $request->kota ?? null;
        $courier = $request->courier;

        if (!$provinsi) {
            abort(400);
        }

        $headers = [
            'key' => env('RAJA_ONGKIR_API_KEY'),
            'content-type' => "application/x-www-form-urlencoded"
        ];

        if (!$kota) {
            // URL
            $apiURL = 'https://api.rajaongkir.com/starter/city?province=' . $provinsi;

            $response = Http::withHeaders($headers)->get($apiURL);
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            if ($statusCode == 200) {
                $tmp_res = array();
                foreach ($responseBody["rajaongkir"]["results"] as $data) {
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
            return response()->json(['message' => 'failed to fetch data'], $statusCode);
        }

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

        if ($statusCode == 200) {
            $tmp_res = array();
            foreach ($responseBody["rajaongkir"]["results"] as $data) {
                foreach ($data["costs"] as $data_detail) {
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

        return response()->json(['message' => 'failed to fetch data'], $statusCode);
    }

    public function page_invoice(Request $request){
        $orderID = $request->orderID;        

        if ($orderID)
        {
            $checkid = HorderModel::where('id_order',$orderID)->first();            
            if (!$checkid) {
                return abort(400);
            }
            $status = \Midtrans\Transaction::status($orderID);
            $statusOrder = 0;

            switch ($status->transaction_status)
            {
                case "capture":
                case "settlement":
                    $statusOrder = 1;
                    break;
                default:
                    break;
            }

            $dataOrder = HorderModel::updateOrCreate(['id_order' => $orderID],[
                'tanggal_trans' => \Illuminate\Support\Carbon::now(),
                'metode_pembayaran' => $status->payment_type,
                'statusOrder' => $statusOrder
            ]);

            // remove session except auth
            $user = Auth::user();
            Session::flush();
            Auth::login($user);

            return view('__User.dashboard.invoice', compact('dataOrder'));
        }
        return back();
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
