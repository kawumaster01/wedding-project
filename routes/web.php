<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSVPController;
use App\Models\Guest;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\AdminController;

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

// Admin dashboard 

    // Route::get('/admin', [AdminController::class, 'index']);

Route::match(['get', 'post'], '/admin', [AdminController::class, 'index'])
    ->middleware('admin.password');
    Route::delete('/guest/{id}', [AdminController::class, 'destroy']);

Route::get('/admin/logout', function () {
    session()->forget('admin_authenticated');
    return redirect('/admin');
});







// Route::get('/login', function () {
//     return "Login page coming soon...";
// })->name('login');