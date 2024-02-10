<?php

namespace App\Http\Middleware;

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
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role == 2) {
            return redirect()->route('manager');
        }

        if (auth()->user()->role == 3) {
            return redirect()->route('developer');
        }

        if (auth()->user()->role == 1) {
            return $next($request);}
 
    }
}
