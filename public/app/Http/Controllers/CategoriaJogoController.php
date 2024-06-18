<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria_jogo;

class CategoriaJogoController extends Controller
{
   
    
    public function index(){
        $categorias_jogos=Categoria_jogo::get();

        return view('admin.categoria_jogo.index', compact('categorias_jogos'));
    }

    public function store(Request $req){
        try{
        Categoria_jogo::create([
            'j_nome'=>$req->nome
        ]);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
        Categoria_jogo::where('id',$id)->update([
            'j_nome'=>$req->nome
        ]);
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function destroy($id){
        try{
        Categoria_jogo::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
