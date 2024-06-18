<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\biblioteca;

class AcessoMiddleware
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
            if(Auth::user()->vc_tipo_utilizador==1 ){
                return $next($request);
            }
            elseif( Auth::user()->vc_tipo_utilizador==2){
                $id=Auth::user()->userbiblioteca[0]->id_biblioteca;
                $estado=biblioteca::where('id',$id)->first();
                if($estado->estado==1){
                    return $next($request);

                }
                else{
                    return redirect()->back()->with('estado.aprovacao',1);
                }
            }

        }
                return redirect()->route('site.index')->with('acesso',1);



    }
}
