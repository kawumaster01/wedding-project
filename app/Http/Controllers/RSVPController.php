<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use Illuminate\Http\Request;

class RSVPController extends Controller
{
    //
	
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'nullable|email',
        'guests' => 'required|integer|min:1'
    ]);

    Guest::create($request->all());

    return back()->with('success', 'Thank you for your RSVP 💍');
}

}
