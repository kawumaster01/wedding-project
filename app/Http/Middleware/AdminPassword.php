<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class AdminPassword
{
    public function handle(Request $request, Closure $next)
    {
        // If already authenticated
        if (session('admin_authenticated')) {
            return $next($request);
        }

        // Check password from form
        if ($request->isMethod('post') && $request->password === env('ADMIN_PASSWORD')) {
            session(['admin_authenticated' => true]);
            return redirect('/admin');
        }

        return response()->view('admin-login');
    }
}