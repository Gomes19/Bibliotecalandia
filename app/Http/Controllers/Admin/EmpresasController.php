<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\empresa;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
class EmpresasController extends Controller
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
        $empresas=empresa::get();
        $this->loggerData("Listou as os Dados da Livraria");
        return view('admin.empresa.index', compact('empresas'));
    }

    public function store(Request $req){
        try{
        $c=empresa::create([
            'iban'=>$req->iban,
            'sobre'=>$req->sobre,
            'contactos'=>$req->contactos,
        ]);
        $this->loggerData("Cadastrou a Empresa com o iban",$c->iban);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
            $c=empresa::where('id',$id)->first();
        $d=empresa::where('id',$id)->update([
            'iban'=>$req->iban,
            'sobre'=>$req->sobre,
            'contactos'=>$req->contactos,
        ]);
        $c=empresa::where('id',$id)->first();
        $this->loggerData("Editou a Empresa com o iban de  $c->iban para $d->iban");
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{
        empresa::destroy($id);
        $c=empresa::where('id',$id)->first();
        $this->loggerData("Eliminou a Empresa com o iban de  $c->iban");
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
