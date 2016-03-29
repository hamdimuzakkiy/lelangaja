<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {                           
        if ($role != Auth::user()->role){
            return redirect(Auth::user()->role.'/index');
        }        
        return $next($request);
    }
}
