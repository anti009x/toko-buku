<?php

namespace App\Http\Controllers;

use App\Models\Admin\buku;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Midtrans\Snap;
use Midtrans\Config;

class DonationController extends Controller
{
    protected $response = [];

    public function index($id) {
        $books = buku::findOrFail($id);
        return view('pembayaran.pembayaran', ['books' => $books]);
    }

    public function __construct()
    {
        Config::$serverKey    = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized  = config('services.midtrans.isSanitized');
        Config::$is3ds        = config('services.midtrans.is3ds');
    }

    public function pay(Request $request)
    {
        DB::transaction(function () use ($request) {
            $user = Auth::user();

            $amount = $request->amount;
            $judul = $request->judul;
            $alamat = $request->alamat;
       
    
            
            $this->validate($request, [
                'judul' => 'required|string',

            ]);
    
            $donation = Donation::create([
                'code'   => 'DONATION-' . mt_rand(100000, 999999),
                'name'   => $user->name,
                'email'  => $user->email,
                'alamat' => $user->alamat,
                'amount' => $amount,
                'judul'  => $judul,
                'note'   => $request->note,
            ]);
    
            $payload = [
                'transaction_details' => [
                    'order_id'     => $donation->code,
                    'gross_amount' => $donation->amount,
                ],
                'customer_details' => [
                    'first_name' => $donation->name,
                    'email'      => $donation->email,
                ],
                'item_details' => [
                    [
                        'id'            => $donation->code,
                        'title'         => $donation->judul,
                        'price'         => $donation->amount,
                        'alamat'        => $donation->alamat,
                        'quantity'      => 1,
                        'name'          => 'Donation to ' . config('app.name'),
                        'brand'         => 'Donation',
                        'category'      => 'Donation',
                        'merchant_name' => config('app.name'),
                    ],
                ],
            ];
    
            $snapToken = Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();
    
            $this->response['snap_token'] = $snapToken;
        });
    
        return response()->json([
            'status'     => 'success',
            'message'    => 'Payment successful',
            'snap_token' => $this->response['snap_token'],
          
        ]);


    
 
}

public function callback (Request $request){
                $serverKey = config('services.midtrans.serverKey');
                $hashed = hash("sha512", $request->order_id . $request->status . $request->gross_amount . $serverKey);

                if ($hashed($hashed==$request->signature_key)) {
                    if ($request->transaction_status == 'capture') {
                        $order = Donation::find($request->status);
                        $order->update(['status' => 'Paid']);
                    }
                }
            }
}
