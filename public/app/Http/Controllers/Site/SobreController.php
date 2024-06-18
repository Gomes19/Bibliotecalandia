<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
use App\Models\empresa;

class SobreController extends Controller
{
    //
    public function index(){
        
        $dados['empresas']=empresa::orderBy('id','desc')->first();
        $dados['sub_categorias']=sub_categoria::get();
        return view('site.sobre.about',$dados);
    }
}
