<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role == 3) {
            return redirect()->route('developer');
        }

        if (auth()->user()->role == 1) {
            return redirect()->route('admin');
        }
        if (auth()->user()->role == 2) {
            return $next($request);
        } else {
            return back(); // Redirecting same dashboard when user try to access another dashboard by typing in the URL
        }
    }
}
