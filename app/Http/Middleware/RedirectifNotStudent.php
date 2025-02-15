<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectifNotStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='student')
    {
        if (!Auth::guard($guard)->check()) {
	        return redirect( route('loginpage'));
	    }

        return $next($request);
    }
}
