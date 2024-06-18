<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    //
    public function index(){
        $id=Auth::user()->id;
         $dados['sub_categorias']=sub_categoria::get();
        $dados['user']=User::where('id',$id)->first();
        return view('site.perfil.index',$dados);
    }
    public function edit(Request $req){
        $id=Auth::user()->id;
        User::where('id',$id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'vc_path'=>$req->vc_path,

            'titulo'=>$req->titulo,
            'lingua'=>$req->lingua,
            'idade'=>$req->idade,
            'descricao'=>$req->descricao,
            'contacto'=>$req->contacto,
            'pais'=>$req->pais,
            'cidade'=>$req->cidade,
            'endereco'=>$req->endereco,
        ]);
      
        if($req->password){
            
    
            if(Hash::check($req->get('password'), Auth::user()->password)){
              
                if($req->confirm_password == $req->new_password){
                    User::where('id',$id)->update([
                        'password'=>Hash::make($req->new_password)
                    ]);
                }
                else{
                    return redirect()->back()->with('p_error',1);
                }
                
            }
            else{
                return redirect()->back()->with('p_error',1);
            }
        }
        return redirect()->back()->with('editada',1);
    }
    
}
