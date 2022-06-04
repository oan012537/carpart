<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Buyer
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
        dd("เข้า Middleware Buyer");
        // return $next($request);
        // if(!Auth::check()){
        if(!Auth::guard('buyer')->check()){
            return redirect()->route('buyer.login')->with('message', 'Authentication Error.');
        }
        return $next($request);

    }
}
