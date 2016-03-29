<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $expectation)
    {           
        
        if (Auth::check() xor $expectation == 'true' ? 1:0)
            if (!Auth::check())
                return redirect('login');
            else
                return redirect(Auth::user()->role.'/index');
        return $next($request);

    }    
}
