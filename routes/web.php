<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSVPController;
use App\Models\Guest;
use App\Http\Controllers\InviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page
Route::get('/', function () {
    return view('welcome');
});





//image download
Route::get('/download-image', [RSVPController::class, 'downloadImageInvite']); 

Route::get('/view-card-image', [InviteController::class, 'ViewImageInvite']);

// RSVP submission
Route::post('/rsvp', [RSVPController::class, 'store']);

// Download general invite (optional)
Route::get('/download-invite', [RSVPController::class, 'downloadInvite']);

// Personalized invite (SECURE with token)
Route::get('/invite/{token}', [RSVPController::class, 'guestInvite']);

// Admin (protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        $guests = Guest::latest()->get();
        return view('admin', compact('guests'));
    });
});