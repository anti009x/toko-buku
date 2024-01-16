<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{

    public function index (){

        return view ('pembayaran.pembayaran');

    }

}
