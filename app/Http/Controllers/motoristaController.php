<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\carros;
use App\Models\categoria;
use App\Models\sub_categoria;
use App\Models\motorista;
use App\Models\provincia;
use App\Models\cores;
use App\Models\galeria;
use App\Models\User;

class MotoristaController extends Controller
{
    //
    public function index(){
        $motoristas=motorista::get();

        return view('site.motorista_cliente_afiliado.index', compact('motoristas'));
    }

    public function create()
    {
        
        
        return view('auth.register_user_motorista');
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
            'bi'=>$request->bi,
            'habilitacoes'=>$request->habilitacoes,
            'vc_tipo_utilizador'=> 2,
            'tipo_pagamento'=>$request->tipo_pagamento,
            'link'=>$request->link,
        ]);

        $motorista= new motorista();
        $motorista->valor=40;
        $motorista->id_user= $user->id;
        $motorista->save();

        $user->where('id',$user->id)->update([
            'vc_tipo_utilizador'=>2
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function update(Request $request){
        $id=Auth::user()->id;
        $motorista= new motorista();
        $motorista->valor=40;
        $motorista->id_user=$id;
        $motorista->save();

        $user->where('id',$user->id)->update([
            'vc_tipo_utilizador'=>2,
            'bi'=>$request->bi,
            'habilitacoes'=>$request->habilitacoes,
            'iban'=>$request->iban
        ]);

    }
}
