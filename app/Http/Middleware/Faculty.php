<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Faculty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if (auth()->check()) {
         if (auth()->user()->isAdmin == 0) {
         return $next($request);
         }
         else{
         return redirect('/admin');
         }

         return redirect()->route('login');
         }

    }
}
