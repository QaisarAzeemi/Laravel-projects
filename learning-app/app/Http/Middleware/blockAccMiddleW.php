<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class blockAccMiddleW
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
        // echo 'This text is from Global Middleware';
        if($request->age && $request->age<18){
            return redirect('blockaccess');
        }
        return $next($request);
    }
}
