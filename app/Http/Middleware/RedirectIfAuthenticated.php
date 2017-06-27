<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // set local according to browser settings
        $browser_language = explode(';', $request->server('HTTP_ACCEPT_LANGUAGE'))[0];

        if (strpos($browser_language, 'de') !== false) {
            app()->setLocale('de');
        }
        else if (strpos($browser_language, 'it') !== false) {
            app()->setLocale('it');
        }
        else {
            app()->setLocale('en');
        }

        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
