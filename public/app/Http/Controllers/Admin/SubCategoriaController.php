<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
use App\Models\categoria;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
class SubCategoriaController extends Controller
{
    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }
    public function index(){
        $dados['sub_categorias']=sub_categoria::get();
       
        $this->loggerData("Listou as Genêros dos Livros");
        return view('admin.sub_categoria.index', $dados);
    }

    public function store(Request $req){
        try{
        $c=sub_categoria::create([
            'vc_nome'=>$req->vc_nome,
           
        ]);
        $this->loggerData("Cadastrou o Genêro",$c->vc_nome);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        return dd($th);
    }
    }
    public function update($id, Request $req){
        try{
         
        $d=sub_categoria::where('id',$id)->update([
            'vc_nome'=>$req->vc_nome,
          
        ]);
        $c=categoria::where('id',$id)->first();
        $this->loggerData("Editou o Genêro de $c->vc_nome para $d->vc_nome");
       
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{
        sub_categoria::destroy($id);
        $c=categoria::where('id',$id)->first();
        $this->loggerData("Eiminou o Genêro de $c->vc_nome para $d->vc_nome");
       
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
