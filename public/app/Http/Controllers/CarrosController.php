<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\sub_categoria;
use App\Models\cores;
use Illuminate\Support\Facades\Auth;
use App\Models\categoria;
use App\Models\provincia;
class CarrosController extends Controller
{
    public function index(){
        $id=Auth::user()->id;
        $carros=carros::where('id_user', $id)->join('categorias','carros.id_categoria','categorias.id')
        ->join('users','carros.id_user','users.id')
        ->join('sub_categorias','carros.id_sub_categoria','sub_categorias.id')
        ->select('carros.*','categorias.vc_nome as categoria','users.name as user','sub_categorias.vc_nome as sub_categoria')
        ->get();

        $categoria=categoria::get();
        $sub_categoria=sub_categoria::get();
        $cores=cores::get();
        $provincias=provincia::get();
        $sub_categoria=sub_categoria::get();
        return view('layouts.site.carros.index', compact('carros','categoria','cores','provincias','sub_categoria'));
     
    }

    public function store(Request $req){
        $id=Auth::user()->id;

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
            'id_sub_categoria'=>$req->id_id_sub_categoria,
            'tipo'=>$req->tipo,
            'id_categoria'=>$req->id_categoria,
            'id_cor'=>$req->id_cor,
            'id_provincia'=>$req->id_provincia,
            'vc_path'=>$caminho,
            'id_user'=>$id,

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
            'id_sub_categoria'=>$req->id_sub_categoria,
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
                'id_sub_categoria'=>$req->id_sub_categoria,
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

