<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sub_categoria;
class ContacteController extends Controller
{
    //
    public function index(){
        return view('site.contacte.contact');
    }
}
