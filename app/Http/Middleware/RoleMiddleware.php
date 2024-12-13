<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Jika role tidak sesuai, munculkan error 403 (Forbidden)
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }

}