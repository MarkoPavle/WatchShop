<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if ($request->session()->has('user')){
        if ($request->session()->get('user')->role->name === 'administrator'){
            return $next($request);
        }
        return redirect()->route('home');
    }
        return redirect()->route('home');
    }
}
