<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
{
    if (!auth()->check()) {
        return redirect('/login');
    }

    if (auth()->user()->role != $role) {
        abort(403, 'Unauthorized action.');
    }

    return $next($request);
}
}
