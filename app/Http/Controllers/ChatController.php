<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            // Redirect to login if not authenticated
            redirect()->route('user.view');
        }

        // Set necessary variables
        $id = Auth::id();  // Authenticated user's ID
        // $messengerColor = 'default_color'; // You can set this dynamically as needed
        // $dark_mode = 'default_mode';       // You can set this dynamically as needed

        // Pass data to the view
        return view('vendor.Chatify.pages.app', [
            'id' => $id,
            // 'messengerColor' => $messengerColor,
            // 'dark_mode' => $dark_mode,
        ]);
    }
}
