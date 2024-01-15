<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index() {


            $books = DB::table('buku')->get();


            return view('user.userview', ['books' => $books]);
        
    }
}
