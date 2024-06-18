<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partileira;
use Illuminate\Support\Facades\Auth;
class PartileiraController extends Controller
{
    //
    public function index(){
        $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        $partileiras=partileira::where('biblioteca_id',$id_biblioteca)->get();

        return view('admin.partileira.index', compact('partileiras'));
    }

    public function store(Request $req){
        try{
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        partileira::create([
            'vc_nome'=>$req->nome,
            'biblioteca_id'=>$id_biblioteca,
        ]);
        return redirect()->back()->with('status',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("status_f", '1');
    }
    }
    public function update($id, Request $req){
        try{
            $id_biblioteca=Auth::user()->userbiblioteca[0]->id_biblioteca;
        partileira::where('id',$id)->update([
            'vc_nome'=>$req->nome,
            'biblioteca_id'=>$id_biblioteca,
        ]);
        return redirect()->back()->with('editada',1);

    } catch (\Throwable $th) {
        return redirect()->back()->with("editada_f", '1');
    }
    }
    public function delete($id){
        try{
        partileira::destroy($id);
        return redirect()->back()->with('eliminada',1);
    }catch (\Throwable $th) {
        return redirect()->back()->with("eliminada_f", '1');
    }
    }
}
