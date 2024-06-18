<?php

namespace App\Http\Controllers\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\userbiblioteca;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class FuncionarioController extends Controller
{
    /** Nivel de Acesso
         * 0-Cliente
         * 1-Administrador
         * 2-Motorista
         * 3-Afiliado
         */
    public function index(){
        // dd(Auth::user()->userbiblioteca);
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $users=userbiblioteca::join('users','userbibliotecas.id_user','users.id')
        ->join('bibliotecas','userbibliotecas.id_biblioteca','bibliotecas.id')
        ->where('userbibliotecas.id_biblioteca',$id_biblioteca)
        ->select('users.*','userbibliotecas.acesso as aceeso')
        ->get();
        // dd($users);

        return view('biblioteca.user.index', compact('users'));
    }

    public function store(Request $req){
        try{
            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                // Imagem VC_PATH
                $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
                $req_imagem=$req->vc_path;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
                $dir = "imagens/galeria";
                $caminho=$dir. "/". $imagem_name;
                $user=User::create([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'password'=>Hash::make($req->password),
                    'vc_path'=>$caminho,
                    'vc_tipo_utilizador'=>2
                ]);
                userbiblioteca::create([
                    'acesso'=>$req->vc_tipo_utilizador,
                    'id_biblioteca'=>$id_biblioteca,
                    'id_user'=>$user->id,
                 ]);
                    return redirect()->back()->with('status',1);
    }
    }catch (\Throwable $th) {
        dd($th);
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
           
            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                // Imagem VC_PATH
                $req_imagem=$req->vc_path;
                $extension=$req_imagem->extension();
                $imagem_name=md5($req_imagem->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_imagem->move(public_path("imagens/galeria"), $imagem_name);
                $dir = "imagens/galeria";
                $caminho=$dir. "/". $imagem_name;
                $user=User::where('id',$id)->update([
                    'name'=>$req->name,
                    'email'=>$req->email,
                    'password'=>Hash::make($req->password),
                    'vc_path'=>$caminho,
                    'vc_tipo_utilizador'=>2,

                ]);
                userbiblioteca::where('id_user',$id)->update([
                    'acesso'=>$req->vc_tipo_utilizador,
                    'id_biblioteca'=>$id_biblioteca,
                    'id_user'=>$id,
                 ]);
                return redirect()->back()->with('editada',1);
                }
                
            
                else{
                    User::where('id',$id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>Hash::make($req->password),
                        'vc_tipo_utilizador'=>2,

                    ]);
                    userbiblioteca::where('id_user',$id)->update([
                        'acesso'=>$req->vc_tipo_utilizador,
                        'id_biblioteca'=>$id_biblioteca,
                        'id_user'=>$id,
                     ]);
                    return redirect()->back()->with('editada',1);
                }

            
    } catch (\Throwable $th) {
        dd($th);
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{

     
        User::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
