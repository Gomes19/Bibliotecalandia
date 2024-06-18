<?php

namespace App\Http\Controllers\Relatorios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria_biblioteca;
use App\Models\biblioteca;
use Illuminate\Support\Facades\DB;
use App1\Models\livrosbiblioteca;
use App\Models\userbiblioteca;
class BibliotecaController extends Controller
{
    public function index(){
        $dados['categorias']=categoria_biblioteca::get();
        $dados['bibliotecas']=biblioteca::get();
        return view('admin.relatorio.biblioteca.index',$dados);
    }
    public function store(Request $req){
        // dd($req);
        if($req->categorias=="Todos" && $req->bibliotecas=="Todos"){
            // dd('ola');
            $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->join('livrosbibliotecas', 'livrosbibliotecas.id_biblioteca', '=', 'bibliotecas.id')
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->get();
            // dd('ola');
   
            $dados['total']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->count();
        }
        elseif($req->categorias!="Todos" && $req->bibliotecas!="Todos"){
            $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->join('livrosbibliotecas', 'livrosbibliotecas.id_biblioteca', '=', 'bibliotecas.id')
            ->where('bibliotecas.id_categoria',$req->categorias!="Todos")
            ->where('bibliotecas.id',$req->bibliotecas)
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->get();
            $dados['total']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->where('bibliotecas.id_categoria',$req->categorias!="Todos")
            ->where('bibliotecas.id',$req->bibliotecas)
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
            ->count();
        }
        elseif($req->categorias!="Todos" && $req->bibliotecas=="Todos"){
            $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->join('livrosbibliotecas', 'livrosbibliotecas.id_biblioteca', '=', 'bibliotecas.id')
            ->where('bibliotecas.id_categoria',$req->categorias!="Todos")
   
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->get();
            $dados['total']=join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->where('bibliotecas.id_categoria',$req->categorias!="Todos")
   
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
            ->count();
        }
        elseif($req->categorias=="Todos" && $req->bibliotecas!="Todos"){
            $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->join('livrosbibliotecas', 'livrosbibliotecas.id_biblioteca', '=', 'bibliotecas.id')
            
            ->where('bibliotecas.id',$req->bibliotecas)
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->get();
            $dados['total']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
      
            
            ->where('bibliotecas.id',$req->bibliotecas)
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
            ->count();
        }
        // dd($dados['livros']);
            $mpdf = new \Mpdf\Mpdf();
            $dados["bootstrap"] = public_path("css/listas/bootstrap.min.css");
            $dados["css"] = public_path("css/listas/style.css");

            $mpdf->SetFont("arial");
            $mpdf->setHeader();
            // $this->loggerData('Imprimiu Lista dos Funcionários');
            $html = view("pdfs/relatorios/biblioteca/index", $dados);
            $mpdf->writeHTML($html);
            $mpdf->Output("Livros.pdf", "I");
    }
}
