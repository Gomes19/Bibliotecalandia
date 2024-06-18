<?php

namespace App\Http\Controllers\Relatorios\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    public function index(){
      
        $dados['bibliotecas']=biblioteca::get();
        return view('biblioteca.relatorio.estudantes.index',$dados);
    }
    public function store(Request $req){
        if($req->biblioteca=="Todos"){
            $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->join('livrosbibliotecas', 'livrosbibliotecas.id_biblioteca', '=', 'bibliotecas.id')
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
            ->get();
   
            $dados['total']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
            ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria', DB::raw('count(livrosbibliotecas.id) as total_livros'))
            ->groupBy('bibliotecas.id')
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
