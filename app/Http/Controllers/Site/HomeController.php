<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\categoria;
use Illuminate\Support\Facades\Auth;
use App\Models\livros;

use App\Models\sub_categoria;
class HomeController extends Controller
{
    public function index(){
        $livros=livros::get();
        $user=Auth::user();
        //    dd(Auth::user()->userbiblioteca[0]->acesso);
        $dados['sub_categorias']=sub_categoria::get();

        $dados['categoria']=categoria::get();
        // dd($dados);
        return view('site.home.index',$dados, compact('livros'));
    }
   }
