
@extends('layouts.site.body')
@section('conteudo')


    <!-- Header -->
    
    <!-- Header End -->
    
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Cadastrar</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Página inicial</a></li>
                            <li class="breadcrumb-item">Cadastrar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->
        
        <!-- contact area -->
        <section class="content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <h4 class="text-secondary">Cadastra-se</h4>
                                <p class="font-weight-600">Se não tens uma conta, por favor cadastra-se.</p>
                                <p class="" > <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                               </p>
                                <div class="mb-4">
                                    <label class="label-title">Nome de usuário *</label>
                                    <input name="name" required="" class="form-control" placeholder="Nome de usuário" type="text">
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Seu email *</label>
                                    <input name="email" required="" class="form-control" placeholder="Seu e-mail" type="email">
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Senha *</label>
                                    <input name="password" required="" class="form-control " placeholder="Sua senha" type="password">
                                </div>
                                <div class="mb-4">
                                    <label class="label-title">Confirmar Senha *</label>
                                    <input name="password_confirmation" required="" class="form-control " placeholder="Sua senha" type="password">
                                </div>
                                <div class="mb-5">
                                    <small>Suas informações serão usadas para melhorar a sua experiência na plataforma <a href="privacy-policy.html">política de privacidades</a>.</small>
                                </div>
                                <div class="text-left">
                                    <button class="btn btn-primary btnhover w-100 me-2">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product END -->
        </section>
        <!-- contact area End--> 
    </div>
    

<!-- End: Cart Section -->
@endsection