<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\sub_categoria;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index(){
        $dados['sub_categorias']=sub_categoria::get();
        return view('site.servicos.services');
    }
}
