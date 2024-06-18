<?php

namespace App\Http\Controllers\Site\Livraria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livros;
class LivrosController extends Controller
{
    //
    public function index(){
        $dados['livros']=livros::join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
        ->join('categorias','livros.id_categoria','categorias.id')
        ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
        ->get();

        return view('site.livros.index2',$dados);
    }
    public function filter(){

    }
}
