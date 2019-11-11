<?php

namespace App\Http\Middleware;

use Closure;

use Sentinel, Alert;

class RoleSentinelMiddleware
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
        if (Sentinel::inRole('writer') && Sentinel::getUser()->hasAccess([$request->route()->getName()])) {
            return $next($request);
        } elseif (Sentinel::getUser()->hasAccess('admin')) {
            return $next($request);
        } else {
            Alert::info('Error','Kamu tidak punya akses');
            return redirect('/');
        }


    }
}
