<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\afiliado;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class conviteController extends Controller
{
     /** Nivel de Acesso
         * 0-Cliente
         * 1-Administrador
         * 2-Motorista
         * 3-Afiliado
         */
        public function create(afiliado $afiliado)
        {
            $afiliado->find('id');
            return view('auth.register_by_afiliado', compact('afiliado'));
        }
    
        /**
         * Handle an incoming registration request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         *
         * @throws \Illuminate\Validation\ValidationException
         */
        public function store(Request $request, afiliado $afiliado)
        {
           // $afiliado=$afiliado->find('id');
           // dd($afiliado);
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            $id=$afiliado->id_user;
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'iban'=>$request->iban,
                'tipo_pagamento'=>$request->tipo_pagamento,
                'link'=>$request->link,
                'id_afiliados' =>$id
            ]);
    
            event(new Registered($user));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        }
    }
    