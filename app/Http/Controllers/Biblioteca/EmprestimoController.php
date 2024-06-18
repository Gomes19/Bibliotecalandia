<?php

namespace App\Http\Controllers\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\emprestismos;
use App\Models\UserEmprestimo;
use App\Models\livrosbiblioteca;
use Illuminate\Support\Facades\Auth;
class EmprestimoController extends Controller
{
    public function index(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['emprestimos']=emprestismos::where('emprestismos.id_biblioteca',$id_biblioteca)
        ->join('livrosbibliotecas','emprestismos.id_livro','livrosbibliotecas.id')
        ->join('user_emprestimos','emprestismos.id_user_emprestimos','user_emprestimos.id')
        ->select('livrosbibliotecas.vc_nome as livro','user_emprestimos.nome as estudante','emprestismos.*')
        ->get();

        return view('biblioteca.emprestimos.index',$dados);
    }
    public function create(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['user_emprestimos']=UserEmprestimo::where('id_biblioteca',$id_biblioteca)
        ->get();

        $dados['livros']=livrosbiblioteca::where('id_biblioteca',$id_biblioteca)
        ->get();

        return view('biblioteca.emprestimos.create',$dados);
    }
    public function store(Request $req){
        try {
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
            $livro=livrosbiblioteca::where('tag',$req->tag)->first('id');
            if($req->entrega){
                $entrega=$req->entrega;
            }
            else{
                $entrega=1;
            }
            emprestismos::create([
                'id_livro'=>$livro->id,
                'entrega'=>$entrega,
                'id_biblioteca'=>$id_biblioteca,
                'id_user_emprestimos'=>$req->id_user_emprestimos,
                'estado'=>0,
            ]);
            return redirect()->back()->with('status',1);

        } catch (\Throwable $th) {
            //throw $th;
            return dd($th);
        }
    }
    public function entregar($id){
        try {
            emprestismos::where('id',$id)->update([
                'estado'=>1,
            ]);
            return redirect()->back()->with('entregue',1);
        } catch (\Throwable $th) {
            //throw $th;
            return dd($th);
        }
    }
    public function cancelar($id){
        try {
            emprestismos::where('id',id)->update([
                'estado'=>2,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
