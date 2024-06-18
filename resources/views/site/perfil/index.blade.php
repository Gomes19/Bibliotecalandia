@extends('layouts.site.body')
@section('conteudo')
<div class="page-wraper">
    {{-- <div id="loading-area" class="preloader-wrapper-1">
        <div class="preloader-inner">
            <div class="preloader-shade"></div>
            <div class="preloader-wrap"></div>
            <div class="preloader-wrap wrap2"></div>
            <div class="preloader-wrap wrap3"></div>
            <div class="preloader-wrap wrap4"></div>
            <div class="preloader-wrap wrap5"></div>
        </div>  --}}
    </div>
<div class="page-content bg-white">
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <section class="content-inner bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 m-b30">
                        <div class="sticky-top">
                            <div class="shop-account">
                                <div class="account-detail text-center">
                                    <div class="my-image">
                                        <a href="javascript:void(0);">
                                            <img alt="" src="images/profile3.jpg">
                                        </a>
                                    </div>
                                    <div class="account-title">
                                        <div class="">
                                            <h4 class="m-b5"><a href="javascript:void(0);">{{Auth::user()->name}}</a></h4>
                                            <p class="m-b0"><a href="javascript:void(0);">{{Auth::user()->titulo}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="account-list">
                                    <li>
                                        <a href="my-profile.html" class="active"><i class="far fa-user" aria-hidden="true"></i> 
                                        <span>Perfil</span></a>
                                    </li>
                                    <li>
                                        <a href="shop-cart.html"><i class="flaticon-shopping-cart-1"></i>
                                        <span>Meu carrinho</span></a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="far fa-heart" aria-hidden="true"></i> 
                                        <span>Lista de desejos</span></a>
                                    </li>
                                    <li>
                                        <a href="books-grid-view.html"><i class="fa fa-briefcase" aria-hidden="true"></i> 
                                        <span>Livros publicados</span></a>
                                    </li>
                                    <li>
                                        <a href="services.html"><i class="far fa-bell" aria-hidden="true"></i> 
                                        <span>Services</span></a>
                                    </li>
                                    <li>
                                        <a href="help-desk.html"><i class="far fa-id-card" aria-hidden="true"></i> 
                                        <span>Meus afiliados</span></a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html"><i class="fa fa-key" aria-hidden="true"></i> 
                                        <span>Estatísticas e finanças</span></a>
                                    </li>
                                    <li>
                                        <a href="shop-login.html"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> 
                                        <span>Terminar sessão</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 m-b30">
                        <div class="shop-bx shop-profile">
                            <div class="shop-bx-title clearfix">
                                <h5 class="text-uppercase">Informações básicas</h5>
                            </div>
                            <form method="post" action="{{route('site.perfil.edit')}}">
                                @csrf
                                <div class="row m-b30">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput1" class="form-label">Seu nome:</label>
                                            <input type="text" name="name" class="form-control" id="formcontrolinput1" placeholder="Nome do Utilizador" value="{{ isset($user->name) ? $user->name : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput2" class="form-label">Título profissional:</label>
                                            <input type="text" name="titulo" class="form-control" id="formcontrolinput2" placeholder="Titulo Profissional" value="{{ isset($user->titulo) ? $user->titulo : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput3" class="form-label">Língua:</label>
                                            <input type="text" name="lingua" class="form-control" value="{{ isset($user->lingua) ? $user->lingua : "" }}" id="formcontrolinput3" placeholder="Linguagem">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput4" class="form-label">idade:</label>
                                            <input type="text" name="idade" class="form-control" id="formcontrolinput4" placeholder="Idade" value="{{ isset($user->idade) ? $user->idade : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea" class="form-label">Descrição:</label>
                                            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea" rows="5">{{ isset($user->descricao) ? $user->descricao : "" }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-bx-title clearfix">
                                    <h5 class="text-uppercase">Informações de contacto</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput5" class="form-label">Contactos:</label>
                                            <input type="text" name="contacto" class="form-control" id="formcontrolinput5" placeholder="+244 911  111 111" value="{{ isset($user->contacto) ? $user->contacto : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput6" class="form-label">Endereço de email:</label>
                                            <input type="text" name="email" class="form-control" id="formcontrolinput6" placeholder="info@example.com" value="{{ isset($user->email) ? $user->email : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput7" class="form-label">Paises:</label>
                                            <input type="text" name="pais" class="form-control" id="formcontrolinput7" placeholder="Nome do País" value="{{ isset($user->pais) ? $user->pais : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput9" class="form-label">Cidade:</label>
                                            <input type="text" name="cidade" class="form-control" id="formcontrolinput9" placeholder="City Name"value="{{ isset($user->cidade) ? $user->cidade : "" }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="formcontrolinput10" class="form-label">Endereço Completo:</label>
                                            <input type="text" name="endereco" class="form-control" id="formcontrolinput10" placeholder="Angola, Luanda,CTT, WakandaSpace" value="{{ isset($user->endereco) ? $user->endereco : "" }}">
                                        </div>
                                    </div>
                                </div>
                                {{-- Password --}}
                                <div class="shop-bx-title clearfix">
                                    <h5 class="text-uppercase">Informações de Segurança e Privacidade</h5>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput5" class="form-label">Password Actual:</label>
                                            <label for="">
                                                
                                            </label>
                                            <input type="password" name="password" class="form-control" id="formcontrolinput5" placeholder="Password Actual">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput6" class="form-label">Nova Palavra-Passe:</label>
                                            <input type="password" name="new_password" class="form-control" id="formcontrolinput6" placeholder="Nova Palavra-Passe">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput7" class="form-label">Confirmar Palavra Passe:</label>
                                            <input type="password" name="confirm_password" class="form-control" id="formcontrolinput7" placeholder="Confirmar Palavra Passes">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary btnhover">Salvar configurações</button>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- Browse Jobs END -->
    </div>
</div>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('eliminada'))
    <script>
        Swal.fire(
            'Email enviado com sucesso!',
            '',
            'success'
        )
    </script>
@endif
@if (session('p_error'))
    <script>
        Swal.fire(
            'Palavra-Passe Antiga !',
            '',
            'error'
        )
    </script>
@endif
@if (session('editada'))
<script>
    Swal.fire(
        'Dados do Utilizador editado com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('editada_f'))
<script>
Swal.fire(
    'ERro ao editar Dados do Utilizador!',
    '',
    'error'
)
</script>
@endif

@if (session('status'))
<script>
    Swal.fire(
        'Dados do Utilizador Cadastrado Com Sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('status_f'))
<script>
Swal.fire(
    'Erro ao cadastrar Dados do Utilizador!',
    '',
    'success'
)
</script>
@endif
@endsection
