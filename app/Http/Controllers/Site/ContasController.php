<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
class ContasController extends Controller
{
    //
    public function motorista(){
        return view('site.conta.motorista.index');
    }
}
