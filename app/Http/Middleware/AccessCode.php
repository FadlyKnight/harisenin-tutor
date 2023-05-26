<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $code = '123'): Response
    {
        if ($request->has('code') && $request->code == $code) {
            return $next($request);
        }
        abort(403, 'Tidak Ada Akses Code');
    }
}
