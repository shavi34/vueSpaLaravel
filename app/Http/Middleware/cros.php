<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cros
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
        return $next($request)
        ->header('Access-Control-Allow-Orgin', 'http://litenotes.test')
        ->header('Access-Control-Allow-Headers', 'X-REQUESTED-WITH');
        
        ;
    }
}
