<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //Посредник соответствия проверки роли пользователя admin
    public function handle($request, Closure $next)
    {
        $currUser = Auth::user();

        if ($currUser->role == 'admin') {
            return $next($request);
        }

        return response()->view('norights');
    }
}
