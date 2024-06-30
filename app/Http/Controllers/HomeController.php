<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;
use Illuminate\Support\Facades\Auth;
use App\Models\pemesanan;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = ticket::orderBy('id_tickets')->get();
        return view('home', compact('data'));
    }

    public function payment(Request $request)
    {

        $data = ticket::find($request->id);
        $transaction = pemesanan::create([
            'id_pemesan' => Auth::user()->id,
            'jml_tiket' => 1,
            'tgl_pesanan' => date('Y-m-d'),
            'total_harga' => $data->harga * 1,
            'id_tickets' => $request->id,
            'status' => 'pending',
        ]);
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        // dd($data);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data->harga,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            )
        );
// dd(config('midtrans.serverKey'));
$snapToken = \Midtrans\Snap::getSnapToken($params);
$transaction->snap_token = $snapToken;
$transaction->save();
return view('payment', compact('data', 'snapToken','transaction'));
}
}
