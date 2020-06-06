<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!auth()->guard($guard)->check())  // For Check If The Gaurded id Valid Only 
        {
            return redirect(route('Admin.Auth.login')) ;
        }

        return $next($request);
    }
}
