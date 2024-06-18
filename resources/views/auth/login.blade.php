
@extends('layouts.site.body')
@section('conteudo')


    <!-- Header -->
    
    <!-- Header End -->
    
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>Iniciar sessão</h1>
                    <hregister.bibliotecaregister.biblioteca3 class="text-white">PAP 2022</h3>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Página inicial</a></li>
                            <li class="breadcrumb-item">Iniciar sessão</li>
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
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content">
                                <h4>Cadastra-se!</h4>
                                <p>Cadastra-se e aproveita ao máximo da plataforma publicando suas obras, participando de grandes eventos e ganhando dinheiro como afiliado de livros pagos!.</p>
                                <a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{url('register')}}">CRIAR CONTA</a>
                                <a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{route('register.biblioteca')}}">CRIAR CONTA BIBLIOTECA</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="login-area">
                            <div class="tab-content nav">
                                <form id="login" class="tab-pane active col-12" action="{{route('login')}}" method="post">
                                    @csrf
                                    <h4 class="text-secondary">INICIAR SESSÃO</h4>
                                    
                                    <p class="font-weight-600">Se tiveres uma conta, inicie sessão.</p>
                                    <p class="" > <x-auth-validation-errors class="mb-4 alert alert-danger alert-dismissible fade show" role="alert" :errors="$errors" />
                                         <x-auth-session-status class="mb-4" :status="session('status')" />
                                         
                                    </p>
                                    <div class="mb-4">
                                        <label class="label-title">Nome *</label>
                                        <label for="">
                                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                                
                                            </ul>
                                        </label>
                                        <input name="name" required="" class="form-control" placeholder="digite Seu nome" type="text">
                                    </div>
                                    <div class="mb-4">
                                        <label class="label-title">SENHA *</label>
                                        <input name="password" required="" class="form-control " placeholder="digite sua senha" type="password">
                                    </div>
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary btnhover me-2">iniciar sessão</button>
                                        <a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Esqueceu a senha</a> 
                                    </div>
                                </form>
                                
                                <form  id="forgot-password" class="tab-pane fade  col-12" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <h4 class="text-secondary">ESQUECEU SUA SENHA ?</h4>
                                    <p class="font-weight-600">Vamos enviar um email para você recuperar. </p>
                                    <div class="mb-3">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="email" required="" class="form-control" placeholder="digite seu e-mail" type="email" :value="old('email')" required autofocus>
                                    </div>
                                    <div class="text-left"> 
                                        <a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">voltar</a>
                                        <button type="submit" class="btn btn-primary btnhover">Submeter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
           
            @if (session('status'))
            <script>
                Swal.fire(
                    'Email de Recuperação Enviado com sucesso!',
                    '',
                    'success'
                )
            </script>
        @endif

            <!-- Validation Errors -->
           
            <!-- Product END -->
        </section>
        <!-- contact area End--> 
</div>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->

<!-- End: Cart Section -->
@endsection