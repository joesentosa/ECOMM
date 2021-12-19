<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewNotif;
use App\Models\AdminModel;
use App\Models\CustomerModel;
use Carbon\Carbon;

class NotifController extends Controller
{
    public function dapatnotif(Request $request)
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('__Admin.dashboard.bacanotif', compact('notifications'));
    }
    public function kirimnotif(Request $request)
    {
        $penerima = AdminModel::find(1);
        $penerima->notify(new NewNotif($penerima));
        return redirect('/');
    }
    public function bacanotif(Request $request)
    {
        $penerima = auth()->user();
        $daftarNotif = [];
        foreach ($penerima->notifications as $notif) {
            $notif->markAsRead();
            $namaPengirim = CustomerModel::find(0);
            $tanggal = Carbon::parse($notif->created_at)->format('d F Y');
            $hasil = "[".$notif->created_at->diffForHumans()."] Pada tanggal $tanggal, si $namaPengirim mengirimkan : hai";
            $daftarNotif[] = $hasil;
        }
        // return view('__Admin.dashboard.bacanotif',[
        //     'daftarNotif' => $daftarNotif
        // ]);
    }
}
