<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;    
use Closure;

class userAuth
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
        // if user is already logged in he will be redirected to landing page
        if(Auth::guard('web')->check()){
            return redirect()->route('landingpage');
            
        }
        return $next($request);
    }
}
