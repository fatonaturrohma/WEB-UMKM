<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UmkmAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('umkm_id')) {
            return redirect('/login');
        }

        return $next($request);
    }
}
