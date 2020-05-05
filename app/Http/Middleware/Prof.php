<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;
use Closure;
use Auth;
class Prof{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	if (Auth::user()->prof==1){
        return $next($request);
	}
	else{
	return new RedirectResponse(url('home'));
    }
	
	}
}
