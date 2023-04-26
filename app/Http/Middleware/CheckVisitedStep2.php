<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckVisitedStep2
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
        if (!session('visitedStep2')) {
            return redirect('/home');
        }

        return $next($request);
    }
}
