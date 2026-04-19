<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSVPController;
use App\Models\Guest;
use App\Http\Controllers\InviteController;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Guest Wish Submission
Route::post('/submit-wish', [RSVPController::class, 'submitWish']);

// Download Personalized Card
Route::get('/download-card/{token}', [RSVPController::class, 'downloadPersonalizedCard']);

// Image downloads
Route::get('/download-image', [RSVPController::class, 'downloadImageInvite']); 
Route::get('/view-card-image', [InviteController::class, 'ViewImageInvite']);

// RSVP submission
Route::post('/rsvp', [RSVPController::class, 'store']);

// Download general invite
Route::get('/download-invite', [RSVPController::class, 'downloadInvite']);

// Personalized invite with token
Route::get('/invite/{token}', [RSVPController::class, 'guestInvite']);

// Admin dashboard (protected)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        $guests = Guest::latest()->get();
        return view('admin', compact('guests'));
    });
});