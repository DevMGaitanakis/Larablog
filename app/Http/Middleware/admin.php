<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class admin
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

      if(!Auth::User()->admin){
        Session::flash('info','You dont have priviledges');
        return redirect()->back();
      }
        return $next($request);
    }
}
