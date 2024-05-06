<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class superadminlogincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

        // session()->put('ssid', $check[0]->id);
        // session()->put('semail', $check[0]->email);
        // session()->put('sfullname', $check[0]->fullname);
        // session()->put('srole', $check[0]->role);


        if(!Session()->has('ssid') && (url('/super-admin/dashboard')==$request->url() 
        // || url('dashboard/leads')==$request->url()
        
        
        
        
        )) {
          
            return redirect('/superadmin')->with('error','Please login First...!');

        }

        return $next($request);
    }
}
