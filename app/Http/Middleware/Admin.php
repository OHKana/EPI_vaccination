<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
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
        if (Auth::check()) {
            if(Auth::user()->role=='admin' || Auth::user()->role=='worker')
            {
                return $next($request);
            }else
            {
                Auth::logout();
                return redirect()->route('healthWorkerSignInUp')->with('success','You are not a HealthWorker.');
            }

        }else{
            return redirect()->route('healthWorkerSignInUp');
        }
    }
}
