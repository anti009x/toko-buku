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

    public function postlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
          
            return $request->user()->level === 'admin' ? 
                   redirect()->route('admin.dashboard') : 
                   redirect()->route('user.view');

        }
    
        return back()->with('error', 'Invalid Credentials');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login.view'); 
      
    }

  

    }

