<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserListController extends Controller
{
    //
    public function motorista(){
        $motoristas=User::where('vc_tipo_utilizador',2)->get();

        return view('', compact('motoristas'));
    }
}
