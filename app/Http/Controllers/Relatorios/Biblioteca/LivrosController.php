<?php

namespace App\Http\Controllers\Relatorios\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livrosbiblioteca;
use App\Models\partileira;
use App\Models\categoria;
use App\Models\User;
use App\Models\userbiblioteca;
use App\Models\sub_categoria;
use App\Models\biblioteca;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LivrosController extends Controller
{
    public function index(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['categorias']=categoria::get();
        $dados['sub_categorias']=sub_categoria::get(); 
         $dados['partileiras']=partileira::where('biblioteca_id',$id_biblioteca)->get();
        return view('biblioteca.relatorio.livros.index',$dados);
    }
    public function store(Request $req){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        if($req->categoria=="Todos" && $req->genero=="Todos" && $req->partileira=="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
      
        // Inicio Categoria
        elseif($req->categoria!="Todos" && $req->genero=="Todos" && $req->partileira=="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
       
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
          
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
         elseif($req->categoria!="Todos" && $req->genero!="Todos" && $req->partileira=="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)

            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
   
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
        elseif($req->categoria!="Todos" && $req->genero=="Todos" && $req->partileira!="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
          
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
        // Fim Categoria

        // Inicio Gênero
        elseif($req->categoria=="Todos" && $req->genero!="Todos" && $req->partileira=="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
        elseif($req->categoria=="Todos" && $req->genero!="Todos" && $req->partileira!="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
   
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
   
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
        // Fim Gênero

        // Inicio Partileira
        elseif($req->categoria=="Todos" && $req->genero=="Todos" && $req->partileira!="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)         ->where('livrosbibliotecas.id_partileira',$req->partileira)

            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
         
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
        
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
        }
        // Fim Partileira
        elseif($req->categoria!="Todos" && $req->genero!="Todos" && $req->partileira!="Todos"){
            $dados['livros']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->get();
   
            $dados['total']=livrosbiblioteca::join('sub_categorias','livrosbibliotecas.id_sub_categoria','sub_categorias.id')
            ->join('categorias','livrosbibliotecas.id_categoria','categorias.id')
            ->join('partileiras','livrosbibliotecas.id_partileira','partileiras.id')
            ->join('bibliotecas','livrosbibliotecas.id_biblioteca','bibliotecas.id')
            ->where('livrosbibliotecas.id_biblioteca',$id_biblioteca)
            ->where('livrosbibliotecas.id_categoria',$req->categoria)
            ->where('livrosbibliotecas.id_partileira',$req->partileira)
            ->where('livrosbibliotecas.id_sub_categoria',$req->genero)
            ->select('sub_categorias.vc_nome as genero','categorias.vc_nome as categoria','livrosbibliotecas.*','partileiras.vc_nome as partileira')
            ->count();
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
