<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminChatController extends Controller
{
    public function index (){

        return view ('admin.adminchat');

    }
}
