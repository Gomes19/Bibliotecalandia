<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\galeria;
class GaleriaController extends Controller
{
    //
    public function index(){
        $galerias=galeria::join('carros','galerias.id_carro','carros.id')
        ->select('galerias.*','carros.marca','carros.modelo')
        ->get();

        $carros=carros::get();

        return view('admin.galeria.index', compact('carros','galerias'));
    }

    public function store(Request $req){
        try{

        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
            $dir = "imagens/galeria";
            $caminho=$dir. "/". $imagem_name;
        galeria::create([
            'vc_path'=>$caminho,
            'id_carro'=>$req->id_carro,

        ]);
        return redirect()->back()->with('status',1);
        }
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
    try{
        if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
            $req_imagem=$req->vc_path;
            $extension=$req_imagem->extension();
            $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
            $dir = "imagens/galeria";
            $caminho=$dir. "/". $imagem_name;
        galeria::where('id',$id)->update([
            'vc_path'=>$caminho,
            'id_carro'=>$req->id_carro,
        ]);

        return redirect()->back()->with('editada',1);
    }
        else{
            galeria::where('id',$id)->update([
            'id_carro'=>$req->id_carro,
            ]);
            return redirect()->back()->with('editada',1);
        }
    }catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{
        galeria::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
