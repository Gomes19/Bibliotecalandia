<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\question;
use App\Models\Categoria_jogo;
use Illuminate\Support\Facades\Session;


class QuestoesInicioController extends Controller
{
    //
    public function index($id){

        Session::put("nextq",'1');
        Session::put("wrongans",'0');
        Session::put("correctans",'0');
        $q=question::where('f_categoria',$id)->first();
        if($q){

    
            $dados=question::where('f_categoria',$id)->count();
            return view('site.jogo.questoes' , compact('dados'))->with(['question'=>$q]);
        }
        else{
            return redirect()->back()->with('jogos.error',1);
        }

        

        

        
    }

    public function store(Request $req,$id){
        

       
        $nextq=Session::get('nextq');
        $wrongans=Session::get('wrongans');
        $correctans=Session::get('correctans');
        $categoria=question::first();
        
        $dados=question::count();

            $nextq+=1;
            if($req->dbans==$req->answer){

                $correctans+=1;
            }
            else{
                $wrongans+=1; 
            }
            Session::put("nextq",$nextq);
            Session::put("wrongans",$wrongans);
            Session::put("correctans",$correctans);

            $i=0;
            $question=question::get();

            foreach($question as $question){
                $i++;
                if($question->count() < $nextq){
                    // dd('ola');
                    return view('site.jogo.fim');
                }
                elseif($i==$nextq){
                    // dd('ola');
                    return view('site.jogo.questoes', compact('dados'))->with(['question'=>$question]);

                }
               
            }


    }

    public function update(){


    }

    public function show(){

    }
    public function create(){
        
    }

    
}
