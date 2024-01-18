<?php

namespace App\Http\Controllers\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Admin\buku;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function bayar($id) {
        $books = buku::findOrFail($id);
        return view('pembayaran.pembayaran', ['books' => $books]);
    }
}
