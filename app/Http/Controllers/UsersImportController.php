<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Imports\UsersImport;
use App\Models\UserEmprestimo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class UsersImportController extends Controller
{

    public function show(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $dados['user_emprestimos']=UserEmprestimo::join('bibliotecas','user_emprestimos.id_biblioteca','bibliotecas.id')
        ->where('user_emprestimos.id_biblioteca',$id_biblioteca)
        ->select('user_emprestimos.*','bibliotecas.vc_nome as biblioteca')
        ->get();
     
        return view('biblioteca.estudantes.estudantes', $dados);

    }
    public function store(Request $request){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $file = $request->file('file');

        DB::table('user_emprestimos')->where('id_biblioteca',$id_biblioteca)->delete();

        Excel::import(new UsersImport, $file);
        return back()->with('execel.file.imported.succesfuly',1);

    }

}

