<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
       public function index (){

        $history = Donation::all();

        return view ('pembayaran.history',['history' => $history]);
       }
}
