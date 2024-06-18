<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Acesso_perfilMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->vc_tipo_utilizador==0 or Auth::user()->vc_tipo_utilizador==2  or Auth::user()->vc_tipo_utilizador==3){
            
                        return $next($request);

                         }
                        }

                return redirect()->route('site.home')->with('acesso',1);
    }
}
