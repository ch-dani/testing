<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;   
use Closure;

class adminAuth
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
        // if admin is logged in
        
        if(Auth::guard('admin')->check()){
            
            return $next($request);
            
               
           
        }else{
            
            return redirect()->route('admin.getLogin');
        }
        
        
    }
}
