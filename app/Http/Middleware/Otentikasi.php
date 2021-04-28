<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class Otentikasi
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

        // dd($request->session()->get('otentikasi'));

        if (!$request->session()->get('otentikasi')) {
           return redirect('/');
        }

        return $next($request);
    }
}
