<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Check if the user is not logged in or does not have the appropriate role
        if  (!$user || !in_array($user->role, $roles)) {
            return redirect()->route('home')->with('error', 'Access denied! You do not
            have permission to access the page.');
        }

        return $next($request);
    }
}