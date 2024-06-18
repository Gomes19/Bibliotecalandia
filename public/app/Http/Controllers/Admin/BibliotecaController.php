<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\biblioteca;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
class BibliotecaController extends Controller
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
        $dados['bibliotecas']=biblioteca::join('categoria_bibliotecas','bibliotecas.id_categoria','categoria_bibliotecas.id')
        ->select('bibliotecas.*','categoria_bibliotecas.vc_nome as categoria')
        ->get();
        $this->loggerData("Listou as Bibliotecas");
        return view('admin.biblioteca.index',$dados);
    }
    public function aprovar($id){
        try {
            biblioteca::where('id',$id)->update([
                'estado'=>1
            ]);
            $biblioteca= biblioteca::where('id',$id)->first();
            $this->loggerData("Aprovou a candidatura da Biblioteca",$biblioteca->vc_nome);
            return redirect()->back()->with('activado',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('activado.error',1);
        }
       
        
    }
    public function desaprovar($id){
        try {
            biblioteca::where('id',$id)->update([
                'estado'=>0
            ]);
            $biblioteca= biblioteca::where('id',$id)->first();
            $this->loggerData("Desaprovou a candidatura da Biblioteca",$biblioteca->vc_nome);
            
            return redirect()->back()->with('desaprovado',1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('desaprovado.error',1);
        }
        
    }
    public function delete($id){
        try {
            biblioteca::destroy($id);
            return redirect()->back()->with('delete',1);
        } catch (\Throwable $th) {
            return redirect()->back()->with('delete.error',1);
        }
        

    }
}
