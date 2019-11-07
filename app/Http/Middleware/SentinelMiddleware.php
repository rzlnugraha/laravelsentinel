<?php

namespace App\Http\Middleware;

use Closure;
use Alert;
use Sentinel;

class SentinelMiddleware
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
        if (Sentinel::guest()) {
            if ($request->ajax()) {
                return respones('Unauthorize',401);
            } else {
                Alert::success('Kamu harus login','Info');
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
