<?php

namespace App\Http\Controllers\Pagamentos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\afiliadouser;
class AfiliadoController extends Controller
{
    //
    public function index(){
        $dividas=afiliadouser::where('estado',0)
        ::join('users','afiliadousers.id_user','users.id')
        ->select('users.*','afiliadousers.*')
        ->get();

        return view('', compact('dividas'));
    }
    public function pagar(Request $req, $id){
        try{

            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                $req_imagem=$req->vc_path;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("imagens/pagamento/afiliado"), $imagem_name);
                $dir = "imagens/pagamento/afiliado";
                $caminho=$dir. "/". $imagem_name;
                afiliadouser::where('id',$id)->update([
                'vc_path'=>$caminho,
                'estado'=>1,
            ]);
            return redirect()->back()->with('status',1);
            }
        }catch (\Throwable $th) {
            return redirect()->back()->with("status_f", '1');
        }
    }
}
