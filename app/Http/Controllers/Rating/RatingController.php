<?php

namespace App\Http\Controllers\Rating;

use App\Http\Controllers\Controller;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{

    

    public function store(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'rating' => 'required|integer',
            'deskripsi'=>'required|string',
        ]);
        $validatedData['name'] = $user->name;

        $rating = new Rating($validatedData);
        $rating->save();

            // Redirect to login if not authenticated
            return redirect()->back()->with('message',"This is Success Message");
      


    }

}
