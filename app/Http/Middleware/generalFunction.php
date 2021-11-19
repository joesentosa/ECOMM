<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class generalFunction
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
        return $next($request);
    }
    public function generateFormatRP($angka){
        return "Rp ".number_format($angka,2,',','.');
    }
}
