<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewLoginController extends Controller
{
    public function index (){
        
        return view ('login.loginview');
    }

    public function postlogin(Request $request){
    
        if (Auth::attempt($request->only('email','password'))){
            $books = DB::table('buku')->get();
           return view('user.userview', ['books' => $books]);
            // dd($request->all());
            
        }
        return view('login.loginview');
    }

    public function logout (){
        // Session::flush();
        
        Auth::logout();

        return view ('login.loginview');
    }

    }

