<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\biblioteca;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\userbiblioteca;
use App\Models\UserEmprestimo;
use App\Models\sub_categoria;
use App\Models\categoria;
use App\Models\partileira;
use App\Models\livrosbiblioteca as fisicos;
use DB;
class HomeController extends Controller
{
    //
    public function index(){
        // dd(Auth::user()->with('userbiblioteca')->first());
        $data['categoria']=categoria::count();
        $data['genero']=sub_categoria::count();
        if(Auth::user()->vc_tipo_utilizador==1){
            $data['users']=User::count();
            $data['bibliotecas']=biblioteca::count();
            $data['estudantes']=UserEmprestimo::count();
            $data['livros']=fisicos::count();

            $bibliotecaData=biblioteca::select([
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('COUNT(*) as total'),
            ])->groupBy('ano')
            ->orderBy('ano','asc')
            ->get();

            foreach ($bibliotecaData as $biblioteca){
                $ano[]=$biblioteca->ano;
                $total[]=$biblioteca->total;
            }
            // dd($data['bibliotecas']);
            // $data['bibliotecaAno']=implode(',',$ano);
            // $data['bibliotecaTotal']=implode(',',$total);


            
           
        }
        if(Auth::user()->vc_tipo_utilizador==2){
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
            $data['users']=userbiblioteca::where('id_biblioteca',$id_biblioteca)->count();
            $data['bibliotecas']=partileira::where('id',$id_biblioteca)->count();
            $data['estudantes']=UserEmprestimo::where('id_biblioteca',$id_biblioteca)->count();
            $data['livros']=fisicos::where('id_biblioteca',$id_biblioteca)->count();
        }
        
        return view('admin.dashbord.index ',$data);
    }

}