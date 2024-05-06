<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class postloginprevent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Session()->has('uid') && url('/')==$request->url()) {
          
            return redirect('dashboard')->with('error','Please login First...!');

        } else if(Session()->has('suid') && url('/superlogin')==$request->url()){
            return redirect('super-admin/dashboard')->with('error','Please login First...!');
        }  
        return $next($request);
    }
}
