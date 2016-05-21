<?php

namespace App\Http\Middleware;

use Closure;

class dokter
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
      if (auth()->check() && $request->user()->rules == 'dokter') {
        return $next($request);
      }
        return redirect()->guest('/home');
    }
}
