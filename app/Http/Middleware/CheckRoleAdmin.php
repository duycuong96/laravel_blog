<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check Auth by calling check_auth middleware
        if(Auth::check()){
            if(Auth::User()->role !== config('common.role.admin')){
                return redirect('/');
            }else{
                return $next($request);
            }
        }else{
            return redirect('login');
        }
        return $next($request);
    }
}
