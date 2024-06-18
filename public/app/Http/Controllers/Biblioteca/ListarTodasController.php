<?php

namespace App\Http\Controllers\Biblioteca;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\biblioteca;
use App\Models\livrosbiblioteca as livros;

class ListarTodasController extends Controller
{

    public function index(){
        $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
        ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
        ->get();

        return view('site.biblioteca.listar_todas',$dados);
    }

    public function show($id){
        $dados['biblioteca']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
        ->where('bibliotecas.id',$id)
        ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
        ->first();

        $dados['livros']=livros::join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
        ->where('livrosbibliotecas.id_biblioteca',$id)
        ->select('livrosbibliotecas.*')
        ->get();



        return view('site.biblioteca.ver_biblioteca',$dados);
    }
   
    public function search(Request $request)
    {
       
        
        $search = $request->input('search');
        $bibliotecas = Biblioteca::where('vc_nome', 'like', "%".$search."%")->get();
     
    
        return view('site.biblioteca.listar_todas', compact('bibliotecas'));
    }
}
