<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(!Session()->has('uid') && (url('/dashboard')==$request->url() 
        || url('dashboard/leads')==$request->url()
        || url('dashboard/add-leads')==$request->url()
        || url('dashboard/viewdeals')==$request->url()
        || url('dashboard/liststaff')==$request->url()
        || url('dashboard/settings')==$request->url()
        || url('dashboard/createlead')==$request->url()
        || url('dashboard/viewleads')==$request->url()
        
        
        
        
        )) {
          
            return redirect('/')->with('error','Please login First...!');

        }   
        return $next($request);
        
       
    }
}
