<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\categoria;
use Illuminate\Support\Facades\Auth;
use App\Models\livros;
use App\Models\sub_categoria;
use App\Models\livrosbiblioteca;
class LivrosController extends Controller
{
    public function index($id){
        $dados['livro']=livros::join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livros.id_categoria','categorias.id')
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
        ->where('livros.id',$id)
        ->first();

        $l=$dados['livro'];
       
        $dados['sub_categorias']=sub_categoria::get();
        $dados['relacionados']=livros::join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livros.id_categoria','categorias.id')
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')->where('livros.id_sub_categoria',$l->id_sub_categoria)->get();
        
        return view('site.livros.index',$dados);
    }

    public function search(Request $req){
        // dd($req);
        $query=livros::query();
        if($req->categoria!="all" && $req->livro!=null){
            $dados['livros']=$query->where('id_sub_categoria',$req->categoria)->where('vc_nome','LIKE', '%'.$req->livro.'%')->get();
            $dados['Blivros']=livrosbiblioteca::where('id_sub_categoria',$req->categoria)->where('vc_nome','LIKE', '%'.$req->livro.'%')->get();
        }
        elseif($req->categoria=="all" && $req->livro!=null){
            // dd($req->livro);
            $dados['livros']=$query->where('vc_nome','LIKE', '%'.$req->livro.'%')->get();
            // dd($dados);
            
            $dados['Blivros']=livrosbiblioteca::where('vc_nome','LIKE', '%'.$req->livro.'%')->get();
        }
        elseif($req->categoria!="all" && $req->livro==null){
            $dados['livros']=$query->where('id_sub_categoria',$req->categoria)->get();
            $dados['Blivros']=livrosbiblioteca::where('id_sub_categoria',$req->categoria)->get();
        }
        else{
            $dados['livros']=$query->get();
            $dados['Blivros']=livrosbiblioteca::get();
        }
      
        // dd($dados);

        return view('site.pesquisa.header.index',$dados);
    }
}
