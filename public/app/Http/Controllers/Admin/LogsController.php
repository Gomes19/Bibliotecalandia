<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logs;
class LogsController extends Controller
{
    //
    public function index(){
        $dados['logs']=Logs::join('users','logs.it_idUsuario','logs.id')
        ->select('logs.*','users.name as usuario')
        ->get();
        return view('admin.logs.index',$dados);
    }
}
