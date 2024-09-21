<?php
// app/Http/Middleware/AdminMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Assuming you have a 'is_admin' field in your users table
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // If the user is not an admin, redirect them to the home page or show a 403 error
        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
