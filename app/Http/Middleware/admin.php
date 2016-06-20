<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * this function is used to check if the user id is 1 or not if not 1 it will redirect to '/' page.As user with id 1 can create hotel value.
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->id!='1'){
            if($request->ajax()){
                return response('Unauthorised',401);
            }
            else{
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
