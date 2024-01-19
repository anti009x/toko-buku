<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userName = Auth::user()->name;
            $history = Donation::where('name', $userName)->get();
            return view('pembayaran.history', ['history' => $history]);
        }
    }
}
