<?php

namespace App\Http\Controllers;
use App\Models\Guest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Typography\FontFactory;
use Intervention\Image\Facades\Image;


class InviteController extends Controller
{
    //

//image download/////

public function ViewImageInvite()
{   

    $manager = new ImageManager(new Driver());

$img = $manager->read(public_path('images/invite-bg.png'));


    // ✅ DEFINE WIDTH HERE
    $width = $img->width();

    // TITLE
    $img->text('Wedding Invitation', $width / 2, 320, function (FontFactory $font) {
        $font->filename(public_path('fonts/ArianaVioleta-dz2K.ttf'));
        $font->size(210);
        $font->color('#d4af37');
        $font->align('center');
    });

    // GUEST NAME
    $img->text('Dear Mal/Alh', $width / 2, 600, function (FontFactory $font) {
        $font->filename(public_path('fonts/HappySwirly-KVB7l.ttf'));
        $font->size(70);
        $font->color('#000');
        $font->align('center');
    });

    // COUPLE
    $img->text('Safiyan 💖 Asmau', $width / 2, 900, function (FontFactory $font) {
        $font->filename(public_path('fonts/LoveDays-2v7Oe.ttf'));
        $font->size(100);
        $font->color('#d63384');
        $font->align('center');
    });





    

    return response($img->toPng(), 200)
    ->header('Content-Type', 'image/png');



     
}



}
