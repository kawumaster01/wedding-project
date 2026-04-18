<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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


//download invitation



public function downloadInvite()
{
    $data = [
        'groom' => 'Safiyan (Kawumaster)',
        'bride' => 'Asmau (Nanah)',
        'date' => '11 July 2026',
        'venue' => 'Itas Gadau, Bauchi, Nigeria'
    ];

    $pdf = Pdf::loadView('invite', $data);

    return $pdf->download('wedding-invitation.pdf');
}

}
