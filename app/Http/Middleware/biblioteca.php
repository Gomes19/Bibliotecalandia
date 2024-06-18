<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\biblioteca as gomes;
use App\Models\rfid;
use Illuminate\Support\Facades\DB;
class biblioteca
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
        if( Auth::user()->vc_tipo_utilizador==2){
            $id=Auth::user()->userbiblioteca[0]->id_biblioteca;
            $estado=gomes::where('id',$id)->first();
            if($estado->estado==1){
                DB::table('rfids')->delete();

                return $next($request);

            }
            else{
                return redirect()->back()->with('estado.aprovacao',1);
            }
        }
        else{
            return redirect()->back();
        }
    }
}
