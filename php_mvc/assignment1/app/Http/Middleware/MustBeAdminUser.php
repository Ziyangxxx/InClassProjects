<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdminUser
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
        if(\Auth::user() && \Auth::user()->is_admin){
            return $next($request);
        }
        
        session()->flash('error', 'You are not authorized to view this resource');
        return redirect('/');
    }
}
