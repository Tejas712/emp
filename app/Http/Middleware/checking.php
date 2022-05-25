<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'emp_phone' => 'max:10|min:10',

        ]);
        return $next($request);
    }
}
