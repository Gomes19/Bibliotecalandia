<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\User;
use App\Models\categoria;
use App\Models\provincia;
use App\Models\cores;
use App\Models\reservas;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    


       
    public function index(){
        $id=Auth::user()->id;
        $data['users']=User::count();
        $data['carro']=carros::where('id_user',$id)->count();
        $data['categorias']=categoria::count();
        $data['reservas']=reservas::where('id_user',$id)->count();
        $data['cores']=cores::count();
  
        return view('layouts.site.dashbord.index', $data);
    }
}
