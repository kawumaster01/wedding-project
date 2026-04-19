<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Typography\FontFactory;

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


//pdf download invitation/////

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

//image download/////

public function downloadImageInvite()
{   

    $manager = new ImageManager(new Driver());

$img = $manager->read(public_path('images/invite-bg.png'));


    // ✅ DEFINE WIDTH HERE
    $width = $img->width();

    // TITLE
    $img->text('Wedding Invitation', $width / 2, 220, function (FontFactory $font) {
        $font->filename(public_path('fonts/ArianaVioleta-dz2K.ttf'));
        $font->size(120);
        $font->color('#d4af37');
        $font->align('center');
    });

    // GUEST NAME
    $img->text('Dear Mal/Alh', $width / 2, 300, function (FontFactory $font) {
        $font->filename(public_path('fonts/HappySwirly-KVB7l.ttf'));
        $font->size(50);
        $font->color('#000');
        $font->align('center');
    });

    // COUPLE
    $img->text('Safiyan 💖 Asmau', $width / 2, 450, function (FontFactory $font) {
        $font->filename(public_path('fonts/LoveDays-2v7Oe.ttf'));
        $font->size(60);
        $font->color('#d63384');
        $font->align('center');
    });






    $img->text('11 July 2026 ' , $width / 2, 650, function (FontFactory $font) {
        $font->filename(public_path('fonts/GalaferaMediumItalic-JpXJK.ttf'));
        $font->size(50);
        $font->color('#000000');
        $font->align('center');
    });

    

////direct download////
return response($img->toPng(), 200)
    ->header('Content-Type', 'image/png')
    ->header('Content-Disposition', 'attachment; filename="wedding-invite.png"');
     
}

}
