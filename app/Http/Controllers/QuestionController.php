<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\question;
use App\Models\Categoria_jogo;


class QuestionController extends Controller
{

    public function index(){
       
        $dados['questionsjogos']=Question::join('categoria_jogos','questions.f_categoria','categoria_jogos.id')
        ->select('questions.*','categoria_jogos.j_nome')
        ->get();
        
        $dados['categoria_jogo']=Categoria_jogo::get();


        return view('admin.categoria_jogo.questions', $dados);
    }

    public function store(Request $req){
        try{
            Question::create([
            'question'=>$req->question,
            'a'=>$req->a,
            'b'=>$req->b,
            'c'=>$req->c,
            'd'=>$req->d,
            'answer'=>$req->answer,
            'f_categoria'=>$req->f_categoria
        ]);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        dd($th);
        return redirect()->back()->with("status_f", '1');
    }
    }

    
    public function update($id, Request $req){
      
        try{
        Question::where('id',$id)->update([
            'question'=>$req->question,
            'a'=>$req->a,
            'b'=>$req->b,
            'c'=>$req->c,
            'd'=>$req->d,
            'answer'=>$req->answer,
            'f_categoria'=>$req->f_categoria
        ]);
       
       
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        dd($th);
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function destroy($id){
        try{
        Question::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
