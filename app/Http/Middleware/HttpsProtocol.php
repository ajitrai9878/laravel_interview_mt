<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HttpsProtocol
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
        if ($_SERVER['SERVER_NAME'] === 'www.anydomian.com') {
            header('location:https://anydomian.com/');
        }
        if (!$request->secure() && !app()->environment('local')) {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
