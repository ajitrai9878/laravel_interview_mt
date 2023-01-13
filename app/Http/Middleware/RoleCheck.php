<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param $slug
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $slug)
    {
        $user = User::find(Auth::id());
        if ($slug === 'users') {
            if ($user->role === 'admin') {
                return $next($request);
            }
            return $next($request);
        }
        if ($slug === 'admin') {
            if ($user->role !== 'admin') {
                return redirect()->route('user.index')->with('error', 'Permission Denied.');
            }
            return $next($request);
        }
        return $next($request);
    }
}
