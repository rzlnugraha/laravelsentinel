<?php

namespace App\Http\Middleware;

use Closure, Sentinel, Alert;

class hasAdmin
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
        if (Sentinel::getUser()->roles()->first()->slug == 'admin') {
            return $next($request);
        } else {
            Alert::warning('Kamu ga punya hak akses','Error');
            return redirect(route('index'));
        }
    }
}
