<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use Illuminate\Support\Facades\Auth;
use App\Models\reservas;
use App\Models\sub_categoria;
use App\Models\User;
use App\Models\afiliado;
use App\Models\afiliadouser;
class CarrosController extends Controller
{
    public function index(){
        $carros=carros::join('categorias','carros.id_categoria','categorias.id')
        ->join('users','carros.id_user','users.id')
        ->join('sub_categorias','carros.id_sub_categoria','sub_categorias.id')
        ->select('carros.*','categorias.vc_nome as categoria','users.name as user','sub_categorias.vc_nome as sub_categoria')
        ->simplePaginate(1);


        return view('site.carro.index', compact('carros'));
    }
    public function reserva($id, Request $req)
    {

     


            $id_user=carros::where('id',$id)->first();

            $user=User::where('id',$id_user->id_user)->first('name');
            $motorista=$user->name;
            $user = Auth::user()->id;
            reservas::create([
                'id_user' => $user,
                'id_carro' => $id,
                'motorista'=>$motorista,
                'estado' => 0,
                'pagamento' => 0,
                'data'=>$req->data,
                'hora'=>$req->hora,
                'pegada'=>$req->pegada,
                'chegada'=>$req->chegada
            ]);
            $id_afiliado=Auth::user()->id_afiliado;
            $valor=afiliado::orderBy('id','DESC')->first();
            if($id_afiliado){
                $pontos=$user->pontos;
                $valor1=$valor->valor;
                $users=User::where('id', $id_afiliado)->update([
                    'pontos'=>$pontos + $valor1
                ]);
                $set=afiliadouser::where('id',$id_afiliado)->where('estado',0)->first();
                if($set){
                    $act=$set->valor;
                    afiliadouser::where('id',$id_afiliado)->update([
                        'id_user'=>$id_afiliado,
                        'valor'=>$valor1+$act,                        
                    ]);
                }
                else{
                    afiliadouser::create([
                        'id_user'=>$id_afiliado,
                        'valor'=>$valor1,
                        'estado'=>0
                    ]);
                }

            }

            return redirect()->back()->with('status', 1);
        
    }

}
