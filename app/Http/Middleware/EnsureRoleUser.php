<?php

namespace App\Http\Middleware;

use App\Main\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $roleId): Response
    {
        if (Auth::check() && $request->user()->role_id == $roleId) {
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
