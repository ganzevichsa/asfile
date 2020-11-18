<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\AdminMiddleware as Middleware;
class AdminMiddleware
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
        if (\Auth::user()->role == 'admin') {
        return $next($request);
     }

       return redirect('home');
     }
}
