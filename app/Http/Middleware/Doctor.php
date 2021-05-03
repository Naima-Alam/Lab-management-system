<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Doctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {if (Auth::check()) {
        if(Auth::user()->role=='doctor' || Auth::user()->role=='admin ')
        {
            return $next($request);
        }else
        {
            Auth::logout();
            return redirect()->route('doctor.login')->with('success','You are not doctor.');
        }

    }else{
        return redirect()->route('doctor.login');
    }
}
}
