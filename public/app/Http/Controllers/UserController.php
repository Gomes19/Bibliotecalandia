<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\afiliado;
use App\Models\motorista;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){
        $users=User::get();
        // dd($users);

        return view('layouts.site.user.index', compact('users'));
    }

    public function store(Request $req){
        try{
            if($req->hasFile('vc_path') && $req->file('vc_path')->isValid()){
                // Imagem VC_PATH
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
                    'iban'=>$req->iban,
                    'pontos'=>0,
                    'tipo_pagamento'=>$req->tipo_pagamento,
                    'link'=>$req->link,
                    'vc_tipo_utilizador'=>$req->vc_tipo_utilizador
                ]);
                if($req->hasFile('habilitacoes') && $req->file('habilitacoes')->isValid()){
                    // Imagem Hablitacôes
                $req_habilitacoes=$req->habilitacoes;
                $extension=$req_habilitacoes->extension();
                $habilitacoes_name=md5($req_habilitacoes->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_habilitacoes->move(public_path("imagens/habilitacoes"), $habilitacoes_name);
                $dir = "imagens/habilitacoes";
                $caminho_habilitacoes=$dir. "/". $habilitacoes_name;
                $id=$user->id;
                User::where('id',$id)->update([
                        'habilitacoes'=>$caminho_habilitacoes
                 ]);
                }
                if($req->hasFile('bi') && $req->file('bi')->isValid()){
                    // Imagem Hablitacôes
                $req_bi=$req->bi;
                $extension=$req_bi->extension();
                $bi_name=md5($req_bi->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_bi->move(public_path("imagens/bi"), $bi_name);
                $dir = "imagens/bi";
                $caminho_bi=$dir. "/". $bi_name;
                $id=$user->id;
                User::where('id',$id)->update([
                        'bi'=>$caminho_bi
                 ]);
                }
                    return redirect()->back()->with('status',1);
    }
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
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
                    'iban'=>$req->iban,
                    'tipo_pagamento'=>$req->tipo_pagamento,

                ]);
                if($req->hasFile('bi') && $req->file('bi')->isValid()){
                    // Imagem Hablitacôes
                $req_bi=$req->bi;
                $extension=$req_bi->extension();
                $bi_name=md5($req_bi->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_bi->move(public_path("imagens/bi"), $bi_name);
                $dir = "imagens/bi";
                $caminho_bi=$dir. "/". $bi_name;
               
                User::where('id',$id)->update([
                        'bi'=>$caminho_bi
                 ]);
                }
                if($req->hasFile('habilitacoes') && $req->file('habilitacoes')->isValid()){
                    // Imagem Hablitacôes
                $req_habilitacoes=$req->habilitacoes;
                $extension=$req_habilitacoes->extension();
                $habilitacoes_name=md5($req_habilitacoes->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_habilitacoes->move(public_path("imagens/habilitacoes"), $habilitacoes_name);
                $dir = "imagens/habilitacoes";
                $caminho_habilitacoes=$dir. "/". $habilitacoes_name;

                User::where('id',$id)->update([
                        'habilitacoes'=>$caminho_habilitacoes
                 ]);
                }
        return redirect()->back()->with('editada',1);
            }
            else{
                if($req->hasFile('bi') && $req->file('bi')->isValid()){
                    // Imagem Hablitacôes
                $req_bi=$req->bi;
                $extension=$req_bi->extension();
                $bi_name=md5($req_bi->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_bi->move(public_path("imagens/bi"), $bi_name);
                $dir = "imagens/bi";
                $caminho_bi=$dir. "/". $bi_name;

                User::where('id',$id)->update([
                        'bi'=>$caminho_bi
                 ]);
                }
                if($req->hasFile('habilitacoes') && $req->file('habilitacoes')->isValid()){
                    // Imagem Hablitacôes
                $req_habilitacoes=$req->habilitacoes;
                $extension=$req_habilitacoes->extension();
                $habilitacoes_name=md5($req_habilitacoes->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $destino=$req_habilitacoes->move(public_path("imagens/habilitacoes"), $habilitacoes_name);
                $dir = "imagens/habilitacoes";
                $caminho_habilitacoes=$dir. "/". $habilitacoes_name;

                User::where('id',$id)->update([
                        'habilitacoes'=>$caminho_habilitacoes
                 ]);
                }
                else{
                    User::where('id',$id)->update([
                        'name'=>$req->name,
                        'email'=>$req->email,
                        'password'=>Hash::make($req->password),
                        'iban'=>$req->iban,

                        'tipo_pagamento'=>$req->tipo_pagamento,

                    ]);
                    return redirect()->back()->with('editada',1);
                }

            }
    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{

        motorista::where('id_user',$id)->delete();
        afiliado::where('id_user',$id)->delete();
        User::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
