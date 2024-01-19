<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
       public function index (){

              if (!Auth::check() ) {
                     $history = Donation::all();
                     redirect()->route('user.view');
                     return view ('pembayaran.history',['history' => $history]);
                 }


      
       }
}
