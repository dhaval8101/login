<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          echo $path=$request->path();
if(($path=="login" || $path=="form") && Session::get('email')){
// return redirect('display');
}


// else if(($path!="login" && !Session::get('email')) && ($path!="form" && !Session::get('email')))
// {

//      return redirect('form');
// }
//          if(($path=="login" || $path=="form")&& Session::get('email')){
// return redirect('login');
//          }


        return $next($request);
    }
}
