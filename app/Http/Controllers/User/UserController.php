<?php

namespace App\Http\Controllers\User;
use App\Models\Admin\buku;
use App\Http\Controllers\Controller;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller{
public function index() {
    $books = buku::all(); 
    $ratings = rating::all(); 
    return view('user.userview', ['books' => $books, 'ratings' => $ratings]);

}

}