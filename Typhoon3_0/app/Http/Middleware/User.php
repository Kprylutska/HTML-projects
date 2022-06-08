<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if(!Auth::check()){
           return redirect()->route('login');
        }
       if(!Auth::user()->roles == 'user'){
            return redirect()->route('user');
        }
        if(!Auth::admin()->roles == 'admin'){
            return redirect()->route('admin');
        }
        
    }
}
