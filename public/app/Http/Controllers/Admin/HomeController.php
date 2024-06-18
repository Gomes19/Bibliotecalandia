<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\User;
use App\Models\categoria;
use App\Models\provincia;
use App\Models\cores;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        // dd(Auth::user()->with('userbiblioteca')->first());
        return view('admin.dashbord.index ');
    }

}