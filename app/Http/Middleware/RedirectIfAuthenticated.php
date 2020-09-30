<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            switch ($guard) {
                case "user":
                    return redirect(route('dashboard'));
                    break;
                case "admin":
                    return redirect(route('admin.dashboard'));
                    break;
                case "author":
                    return redirect(route('author.dashboard'));
                    break;
            }
        }

        return $next($request);
    }
}
