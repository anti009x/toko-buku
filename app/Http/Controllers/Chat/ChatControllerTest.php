<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatControllerTest extends Controller
{
    
    public function index (){

        

        return view ('chat.chat');
    }

}
