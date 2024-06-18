<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
class CategoriaController extends Controller
{
    //
    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }
    public function index(){
        $categorias=categoria::get();

        $this->loggerData("Listou as Categorias dos Livros");
        return view('admin.categoria.index', compact('categorias'));
    }

    public function store(Request $req){
        try{
        $c=categoria::create([
            'vc_nome'=>$req->nome
        ]);
        $this->loggerData("Cadastrou a Categoria",$c->vc_nome);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
          
        $d=categoria::where('id',$id)->update([
            'vc_nome'=>$req->nome
        ]);
        $c=categoria::where('id',$id)->first();
        $this->loggerData("Editou a Categoria de $c->vc_nome para $d->vc_nome");
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{
        categoria::destroy($id);
        $c=categoria::where('id',$id)->first();
        $this->loggerData("Eliminou a Categoria",$c->vc_nome);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
