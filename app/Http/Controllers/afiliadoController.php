<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carros;
use App\Models\categoria;
use App\Models\sub_categoria;
use App\Models\motorista;
use App\Models\provincia;
use App\Models\cores;
use App\Models\galeria;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\afiliado;



class afiliadoController extends Controller

{
    //
    public function index(){
        $afiliados=afiliado::get();

        return view('site.motorista_cliente_afiliado.index', compact('afiliados'));
    }

    public function create()
    {
        
        
        return view('auth.register_user_afiliado');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
       

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'iban'=>$request->iban,
            'tipo_pagamento'=>$request->tipo_pagamento,
            'link'=>$request->link,
        ]);
         
        $afiliado= new afiliado();
        $afiliado->valor=10;
        $afiliado->id_user=$user->id;
        $afiliado->save();
        $id=Auth::user()->id;
      
       
        
    
       
        event(new Registered($user));

        $user->where('id',$user->id)->update([
            'vc_tipo_utilizador'=>3,
            'link'=>'convite/create/'.$afiliado->id
        ]);

       

        Auth::login($user);
      

        return redirect(RouteServiceProvider::HOME);
    }


    
    public function update(Request $request){
         
        $id=Auth::user()->id;
        $afiliado= new afiliado();
        $afiliado->valor=10;
        $afiliado->id_user=$id;
        $afiliado->save();


        User::where('id', $id)->update([
            'iban'=>$request->iban,
            'vc_tipo_utilizador'=>3,
            'link'=>'convite/create/'.$afiliado->id
        ]);

      
        return redirect(RouteServiceProvider::HOME);

    }
}

