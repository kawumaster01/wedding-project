<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guest;

class AdminController extends Controller
{
    //

    public function index()
    {
        $guests = Guest::latest()->get();

        $total = Guest::count();

        return view('admin', compact('guests', 'total'));
    }

    public function destroy($id)
    {
        Guest::findOrFail($id)->delete();

        return back()->with('success', 'Guest deleted');
    }
}

