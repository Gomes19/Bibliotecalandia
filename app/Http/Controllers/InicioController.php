<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria_jogo;

class InicioController extends Controller
{
    //
    public function index(){

        $dados['categorias_jogos']=Categoria_jogo::get();

        return view('site.jogo.inicio', $dados);
    }


}
