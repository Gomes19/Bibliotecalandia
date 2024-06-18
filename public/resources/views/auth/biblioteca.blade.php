
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
                    <div class="col-lg-12 col-md-12 mb-4 row">
                        <div class="login-area row">
                            <form method="post" action="{{route('register')}}" enctype="multipart/form-data">
                                @csrf
                                <h4 class="text-secondary">Cadastra-se</h4>
                                <p class="font-weight-600">Se não tens uma conta, por favor cadastra-se.</p>
                                <p class="" > <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                               </p>
                               <div class="form-group row">
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Nome de usuário *</label>
                                        <input name="name" required="" class="form-control" placeholder="Nome de usuário" type="text">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Seu email *</label>
                                        <input name="email" required="" class="form-control" placeholder="Seu e-mail" type="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Senha *</label>
                                        <input name="password" required="" class="form-control " placeholder="Sua senha" type="password">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Confirmar Senha *</label>
                                        <input name="password_confirmation" required="" class="form-control " placeholder="Sua senha" type="password">
                                    </div>
                                </div>
                                {{-- Dados da Biblioteca --}}
                                    <h4 class="text-secondary">Dados da biblioteca</h4>
                                <p class="font-weight-600">Informe os dados da Biblioteca</p>
                               <div class="form-group row">
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Nome da Biblioteca *</label>
                                        <input name="vc_biblioteca" required="" class="form-control" placeholder="Nome da Biblioteca" type="text">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">NIF *</label>
                                        <input name="nif" required="" class="form-control" placeholder="NIF da Biblioteca" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Endereço da Biblioteca *</label>
                                        <input name="endereco_biblioteca" required="" class="form-control " placeholder="Endereço da Biblioteca" type="text">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Documento de propriedade do imovel onde a biblioteca está instalada *</label>
                                        <input name="documento_imovel" required="" class="form-control "  type="file">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Licença de Uso do Edificio *</label>
                                        <input name="licenca" required="" class="form-control "  type="file">
                                    </div>
                                    <div class="mb-4 col-md-6">
                                        <label class="label-title">Tipo de Biblioteca</label>
                                        <select class="form-control" name="tipo_biblioteca">
                                           @foreach ($categoria as $biblioteca)
                                                <option value="{{ $biblioteca->id }}">{{ $biblioteca->vc_nome }}</option>
                                               
                                           @endforeach
                                        </select>
                                    </div>
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