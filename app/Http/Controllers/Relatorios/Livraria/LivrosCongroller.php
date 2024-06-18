<?php

namespace App\Http\Controllers\Relatorios\Livraria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\sub_categoria;
use App\Models\livros;
class LivrosCongroller extends Controller
{
    //
    public function index(){
        $dados['categorias']=categoria::get();
        $dados['sub_categorias']=sub_categoria::get();
        return view('admin.relatorio.livraria.livros.index',$dados);
    }
    public function store(Request $req){
        if($req->categoria=="Todos" && $req->genero=="Todos"){
            $dados['livros']=livros::join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livros.id_categoria','categorias.id')
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
            ->get();
   
            $dados['total']=livros::count();
        }
        elseif($req->categoria!="Todos" && $req->genero!="Todos"){
            $dados['livros']=livros::where('livros.id_categoria',$req->categoria)->where('livros.id_sub_categoria',$req->genero)->join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livros.id_categoria','categorias.id')
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
            ->get();
            $dados['total']=livros::count();
        }
        elseif($req->categoria!="Todos" && $req->genero=="Todos"){
            $dados['livros']=livros::where('livros.id_categoria',$req->categoria)->join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livros.id_categoria','categorias.id')
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
            ->get();
            $dados['total']=livros::count();
        }
        elseif($req->categoria=="Todos" && $req->genero!="Todos"){
            $dados['livros']=livros::where('livros.id_sub_categoria',$req->genero)->join('sub_categorias','livros.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livros.id_categoria','categorias.id')
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livros.*')
            ->get();
            $dados['total']=livros::count();
        }
        // dd($dados['livros']);
        $mpdf = new \Mpdf\Mpdf();
        $dados["bootstrap"] = public_path("css/listas/bootstrap.min.css");
        $dados["css"] = public_path("css/listas/style.css");

        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        // $this->loggerData('Imprimiu Lista dos Funcionários');
        $html = view("pdfs/livraria/livros/index", $dados);
        $mpdf->writeHTML($html);
        $mpdf->Output("Livros.pdf", "I");
    }
}
