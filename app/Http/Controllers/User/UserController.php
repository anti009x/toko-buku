<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(Request $request) {


        if (Auth::attempt($request->only('email','password'))){
            $books = DB::table('buku')->get();
           return view('user.userview', ['books' => $books]);
            // dd($request->all());
            
        }
        return view('login.loginview');
    }

            // $books = DB::table('buku')->get();


            // return view('user.userview', ['books' => $books]);
        
    }

