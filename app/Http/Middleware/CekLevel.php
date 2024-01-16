<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLevel
{
    public function handle(Request $request, Closure $next, ...$levels) {
        if ($request->user() && in_array($request->user()->level, $levels)) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    } 
}
