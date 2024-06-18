@extends('layouts.site.body')
@section('conteudo')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Recuperar Conta</h1>
                <h3 class="text-white">PAP 2022</h3>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Página inicial</a></li>
                        <li class="breadcrumb-item">Recuperar Conta</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
               
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 " :errors="$errors" />
        <section class="content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content">
                                <h4>Cadastra-se!</h4>
                                <p>Cadastra-se e aproveita ao máximo da plataforma publicando suas obras, participando de grandes eventos e ganhando dinheiro como afiliado de livros pagos!.</p>
                                <a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{url('register')}}">CRIAR CONTA</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content nav">
        <form method="POST" class="" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" class="label-title" :value="__('Email')" />
                <br>
                <x-input id="email" class="block form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password"  class="label-title" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full form-control " type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" class="label-title"  :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
    </x-auth-card>
</x-guest-layout>
@endsection