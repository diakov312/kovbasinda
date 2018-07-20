<?php

namespace App\Http\Middleware;

use Closure;

class TestMid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo ("<br><br><br><br><br><br><br><br><br>Test work!");
        return $next($request);
    }
}
