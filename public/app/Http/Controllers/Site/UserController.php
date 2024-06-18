<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\categoria;
use App\Models\sub_categoria;
use App\Models\motorista;
use App\Models\provincia;
use App\Models\cores;
use App\Models\galeria;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function index(){
        $dados['user']=Auth::user()->id;
        $dados['carros']=carros::join('categorias','carros.id_categoria','categorias.id')
        ->join('provincias','carros.id_provincia','provincias.id')
        ->join('cores','carros.id_cor','cores.id')
        ->select('carros.*','provincias.vc_nome as provincia','cores.vc_nome as cor','categorias.vc_nome as categoria')
        ->where('id_user',$user)
        ->get();
        $dados['sub_categoria']= sub_categoria::get();
        $dados['categoria']=categoria::get();
        $dados['provincias']=provincia::get();
        $dados['cores']=cores::get();
        $dados['motoristas']=motorista::get();
        $dados['sub_categorias']=sub_categoria::get();
        return view('site.motorista_cliente_afiliado.index',$dados);
    }
    public function store(Request $req){
        $user=Auth::user()->id;

        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/cursos"), $imagem_name);
            $dir = "imagens/cursos";
            $caminho=$dir. "/". $imagem_name;
        carros::create([

            'marca'=>$req->marca,
            'modelo'=>$req->modelo,
            'localizacao'=>$req->localizacao,
            'preco'=>$req->preco,
            'telefone'=>$req->telefone,
            'mudancas'=>$req->mudancas,
            'combustivel'=>$req->combustivel,

            'tipo'=>$req->tipo,
            'id_categoria'=>$req->id_categoria,
            'id_cor'=>$req->id_cor,
            'id_provincia'=>$req->id_provincia,
            'vc_path'=>$caminho,
            'id_user'=>$user,

        ]);
        return redirect()->back()->with('status',1);
        }
    }
    public function update($id, Request $req){
        $user=1;
        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/carros"), $imagem_name);
            $dir = "imagens/cursos";
            $caminho=$dir. "/". $imagem_name;
        carros::where('id',$id)->update([
            'marca'=>$req->marca,
            'modelo'=>$req->modelo,
            'localizacao'=>$req->localizacao,
            'preco'=>$req->preco,
            'telefone'=>$req->telefone,
            'mudancas'=>$req->mudancas,
            'combustivel'=>$req->combustivel,

            'tipo'=>$req->tipo,
            'id_categoria'=>$req->id_categoria,
            'id_cor'=>$req->id_cor,
            'id_provincia'=>$req->id_provincia,
            'vc_path'=>$caminho,
            'id_user'=>$user,
        ]);

        return redirect()->back()->with('status',1);
    }
        else{
            carros::where('id',$id)->update([
                'marca'=>$req->marca,
                'modelo'=>$req->modelo,
                'localizacao'=>$req->localizacao,
                'preco'=>$req->preco,
                'telefone'=>$req->telefone,
                'mudancas'=>$req->mudancas,
                'combustivel'=>$req->combustivel,

                'tipo'=>$req->tipo,
                'id_categoria'=>$req->id_categoria,
                'id_cor'=>$req->id_cor,
                'id_provincia'=>$req->id_provincia,

                'id_user'=>$user,
            ]);
            return redirect()->back()->with('status',1);
        }
    }
    public function delete($id){
        carros::destroy($id);
        return redirect()->back()->with('eliminar',1);
    }
}
