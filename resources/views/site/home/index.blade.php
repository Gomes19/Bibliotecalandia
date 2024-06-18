@extends('layouts.site.body')
@section('conteudo')
<!-- Start: Slider Section -->
<div class="page-wraper">
    <div id="loading-area" class="preloader-wrapper-1">
        <div class="preloader-inner">
            <div class="preloader-shade"></div>
            <div class="preloader-wrap"></div>
            <div class="preloader-wrap wrap2"></div>
            <div class="preloader-wrap wrap3"></div>
            <div class="preloader-wrap wrap4"></div>
            <div class="preloader-wrap wrap5"></div>
        </div> 
    </div>
<div class="page-content bg-white">

    <!--Swiper Banner Start -->
    <div class="main-slider style-1">
        <div class="main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="swiper-content">                        
                                        <div class="content-info">
                                            <h6 class="sub-title" data-swiper-parallax="-10"> Encontre o livro que procuras</h6>
                                            <h1 class="title mb-0" data-swiper-parallax="-20">Nas Bibliotecas</h1>
                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                <li>
                                                    <a href="javascript:void(0);">Rápido</a>
                                                </li>
                                                <li><a href="javascript:void(0);">Simples</a></li>
                                            </ul>
                                            <p class="text mb-0" data-swiper-parallax="-40">Não precisas te deslocar para encontrar o livro que desejas, evite constrangimentos, pesquisa o livro que desejas e encontre as Bibliotecas que têm.</p>
                                            <div class="price" data-swiper-parallax="-50">
                                                
                                                <span class="badge badge-danger">Simplifica, não complica</span>
                                            </div>
                                            <div class="content-btn" data-swiper-parallax="-60">
                                                <a class="btn btn-primary btnhover" href="{{route('listar.todas.index')}}">Encontre as Bibliotecas</a>
                                                
                                            </div>
                                        </div>
                                        <div class="partner">
                                            <p>Nossos Parceiros</p>
                                            <div class="brand-logo">
                                                <img src="images/partner/partner-1.png" alt="client">
                                                <img class="mid-logo" src="images/partner/partner-2.png" alt="client">
                                                <img src="images/partner/partner-3.png" alt="client">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-media" data-swiper-parallax="-100">
                                        {{-- <img src="images/banner/banner-media.png" alt="banner-media"> --}}
                                    </div>
                                    <img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="swiper-content">
                                        <div class="content-info">
                                            <h6 class="sub-title" data-swiper-parallax="-10">Seja parceiro</h6>
                                            <h1 class="title mb-0" data-swiper-parallax="-20">Encontre as bibliotecas</h1>
                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                <li><a href="javascript:void(0);">Aumente suas vendas</a></li>
                                                <li><a href="javascript:void(0);">Seja presente</a></li>
                                            </ul>
                                            <p class="text mb-0" data-swiper-parallax="-40">Seja parceiro, cadastre sua biblioteca no nosso sistema e torna ela mais acessível, aumenta suas vendas, gere seus livros e publicite seus eventos aqui!</p>
                                            <div class="price" data-swiper-parallax="-50">
                                               
                                                <span class="badge badge-danger">Não complica, Simplifica</span>
                                            </div>
                                            <div class="content-btn" data-swiper-parallax="-50">
                                                <a class="btn btn-primary btnhover" href="{{route('listar.todas.index')}}">Encontre as bibliotecas</a>
                                            
                                            </div>
                                        </div>
                                        <div class="partner">
                                            <p>Nossos Parceiros</p>
                                            <div class="brand-logo">
                                                <img src="images/partner/partner-1.png" alt="client">
                                                <img class="mid-logo" src="images/partner/partner-2.png" alt="client">
                                                <img src="images/partner/partner-3.png" alt="client">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-media" data-swiper-parallax="-100">
                                        {{-- <img src="images/banner/banner-media2.png" alt="banner-media1"> --}}
                                    </div>
                                    <img class="pattern" src="images/Group.png" data-swiper-parallax="-100" alt="dots">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container swiper-pagination-wrapper">
                <div class="swiper-pagination-five"></div>
            </div>
        </div>
        <div class="swiper main-swiper-thumb">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="books-card">
                        <div class="dz-media">
                            <img src="images/books/book16.png" alt="book">
                        </div>
                        <div class="dz-content">
                            <h5 class="title mb-0">Pensa e Cresça Rico</h5>
                            <div class="dz-meta">
                                <ul>
                                    <li>de: Napoleão Hill</li>
                                </ul>
                            </div>
                            <div class="book-footer">
                                <div class="price">
                                    <span class="price-num">190Kz</span>
                                </div>
                                <div class="rate">
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="books-card">
                        <div class="dz-media">
                            <img src="images/books/grid/book9.jpg" alt="book">
                        </div>
                        <div class="dz-content">
                            <h5 class="title mb-0">Empurrando núvem</h5>
                            <div class="dz-meta">
                                <ul>
                                    <li>de: Jamet Sigh</li>
                                </ul>
                            </div>
                            <div class="book-footer">
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                </div>
                                <div class="rate">
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="books-card">
                        <div class="dz-media">
                            <img src="images/books/grid/book9.jpg" alt="book">
                        </div>
                        <div class="dz-content">
                            <h5 class="title mb-0">Empurrando núvem</h5>
                            <div class="dz-meta">
                                <ul>
                                    <li>de: Jamet Sigh</li>
                                </ul>
                            </div>
                            <div class="book-footer">
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                </div>
                                <div class="rate">
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="books-card">
                        <div class="dz-media">
                            <img src="images/books/grid/book9.jpg" alt="book">
                        </div>
                        <div class="dz-content">
                            <h5 class="title mb-0">Empurrando núvem</h5>
                            <div class="dz-meta">
                                <ul>
                                    <li>de: Jamet Sigh</li>
                                </ul>
                            </div>
                            <div class="book-footer">
                                <div class="price">
                                    <span class="price-num">250Kz</span>
                                </div>
                                <div class="rate">
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-yellow"></i>
                                    <i class="flaticon-star text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Swiper Banner End-->

    <!-- Client Start-->
    <div class="bg-white py-5">
        <div class="container">
            <!--Client Swiper -->
            <div class="swiper client-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
                    <div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client End-->

    <!--Recommend Section Start-->
    <section class="content-inner-1 bg-grey reccomend">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">Recomendado para você</h2>
                <p>Os livros de mais destaques, com os melhores feedbacks e mais cliques. Livros de variadas categorias que conquistaram a maior atenção do público, veja a lista que preparamos para sí!</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-two">
                <div class="swiper-wrapper">
                    @foreach ($livros as $livro)
                    <div class="swiper-slide">
                        <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="dz-media">
                                <img src="{{$livro->vc_path}}" alt="book">
                            </div>
                            <div class="dz-content">
                                <h4 class="title">{{Str::limit($livro->vc_nome,13)}}</h4>
                                @if($livro->preco==0)
                                <span class="price">Gratis</span>
                                @else
                                <span class="price">{{$livro->preco}}kz</span>
                                @endif
                                <a href="{{route('site.livro.desc',$livro->id)}}" class="btn btn-secondary btnhover btnhover2">Detalhes do Livro</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- icon-box1 -->
    <section class="content-inner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-1 m-b20 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-power icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Entrega rápida</h5>
                            <p>Competimos com a rápidez da luz, entregaremos sua encomenda a tempo e hora</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-1 m-b20 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-shield icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Pagamento Seguro</h5>
                            <p>Suas transações estão seguras connosco</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-1 m-b20 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-like icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">A Melhor qualidade</h5>
                            <p>A nossa qualidade é melhor </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper style-1 m-b20 text-center">
                        <div class="icon-bx-sm m-b10">
                            <i class="flaticon-star icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title m-b10">Retorno garantido</h5>
                            <p>Políticas de retorno flexíveis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- icon-box1 End-->

    <!-- Book Sale -->
  
    <!-- Book Sale End -->

    <!-- Feature Product -->
    <section class="content-inner-1 bg-grey reccomend">
        <div class="container">
            <div class="section-head text-center">
                <div class="circle style-1"></div>
                <h2 class="title">Produtos em destaques</h2>
                <p>Veja os produtos em destaque deessa semana, os melhores livros desde os mais lidos aos mais vendidos. </p>
            </div>
        </div>
        <div class="container">
            <div class="swiper-container books-wrapper-2 swiper-three">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook1.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">MAIS VENDIDOS</h6>
                                <h2 class="title">Levantamento DE PESO</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócios & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">200kz</span>
                                    <del>150kz</del>
                                    <span class="badge">20% DESCONTO</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Comprar Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook2.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">Mais Vendidos</h6>
                                <h2 class="title">Levantamento de Peso</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócios & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                    <del>200kz</del>
                                    <span class="badge">20% de Desconto</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Compre Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook1.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">Mais Vendidos</h6>
                                <h2 class="title">Levantamento de Peso</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócio & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                    <del>200kz</del>
                                    <span class="badge">20% de Desconto</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Compre Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook2.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">Mais Vendidos</h6>
                                <h2 class="title">Levantamento DE PESO</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócio & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                    <del>200kz</del>
                                    <span class="badge">20% de Desconto</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Compre Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook1.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">Mais Vendidos</h6>
                                <h2 class="title">Levantamento DE PESO</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócio & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                    <del>200kz</del>
                                    <span class="badge">20% de Desconto</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Compre Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="books-card style-2">
                            <div class="dz-media">
                                <img src="images/books/large/bigbook2.jpg" alt="book">
                            </div>
                            <div class="dz-content">
                                <h6 class="sub-title">Mais Vendidos</h6>
                                <h2 class="title">Levantamento DE PESO</h2>
                                <ul class="dz-tags">
                                    <li>Napoleon Hill</li>
                                    <li>Negócio & Estrategias</li>
                                </ul>
                                <p class="text">Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público </p>
                                <div class="price">
                                    <span class="price-num">150kz</span>
                                    <del>200kz</del>
                                    <span class="badge">20% de Desconto</span>
                                </div>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Compre Agora</a>
                                    <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">Ver Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-align style-2">
                    <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="swiper-pagination-three"></div>
                    <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Product End -->

    <!-- Special Offer-->
    {{-- <section class="content-inner-2">
        <div class="container">
            <div class="section-head book-align">
                <h2 class="title mb-0">Eventos Futuros</h2>
                <div class="pagination-align style-1">
                    <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
            <div class="swiper-container book-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog5.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">SEGUNDOS [Parte I]</a></h4>
                                <div class="dz-meta">
                                    <ul class="dz-tags">
                                        <li><a href="books-detail.html">BIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        250KZ <del>25KZ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog6.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">Loucura Terrível</a></h4>
                                <div class="dz-tags">
                                    <ul>
                                        <li><a href="books-detail.html">BIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        25KZ<del>250KZ</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog7.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                <div class="dz-tags">
                                    <ul>
                                        <li><a href="books-detail.html">BIBLIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        25kz <del>250kz</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog5.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">SEGUNDOS [Parte I]</a></h4>
                                <div class="dz-tags">
                                    <ul>
                                        <li><a href="books-detail.html">BIBLIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        25kz <del>250kz</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog6.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">Loucura Terrível</a></h4>
                                <div class="dz-tags">
                                    <ul>
                                        <li><a href="books-detail.html">BIBLIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        25kz <del>250kz</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="dz-media">
                                <a href="books-detail.html"><img src="images/blog/blog7.jpg" alt="/"></a>
                            </div>
                            <div class="dz-info">
                                <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                <div class="dz-tags">
                                    <ul>
                                        <li><a href="books-detail.html">BIBLIOGRAFIA</a></li>
                                        <li><a href="books-detail.html">TRAILLER</a></li>
                                        <li><a href="books-detail.html">HORROR</a></li>
                                    </ul>
                                </div>
                                <p>Livro mais vendido na semana, mais de 5000 livros vendidos em uma semana, os feedbakcs do livro foram os melhores da parte do público</p>
                                <div class="bookcard-footer">
                                    <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> Adicionar no carrinho</a>
                                    <div class="price-details">
                                        25kz <del>250kz</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Special Offer End -->

    <!-- Testimonial -->

    <!-- Testimonial End -->

    <!-- Latest News -->
    <section class="content-inner-2">
       
    </section>
    <!-- Latest News End -->

    <!-- Feature Box -->
  <!--  <section class="content-inner">
        <div class="container">
            <div class="row sp15">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-users icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">125,663</h2>
                            <p class="font-20">Escritores</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-book icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">50,672</h2>
                            <p class="font-20">Livros</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-store icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">1,562</h2>
                            <p class="font-20">Bibliotecas Físicas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper style-2 m-b30 text-center">
                        <div class="icon-bx-lg">
                            <i class="fa-solid fa-leaf icon-cell"></i>
                        </div>
                        <div class="icon-content">
                            <h2 class="dz-title counter m-b0">457</h2>
                            <p class="font-20">Eventos Novos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Feature Box End -->

    <!-- Newsletter -->
    <section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
        <div class="container">
            <div class="subscride-inner">
                <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                    <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-head mb-0">
                            <h2 class="title text-white my-lg-3 mt-0">Subscreva para receber notícas actualizadas!</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <form class="dzSubscribe style-1" action="script/mailchamp.php" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group mb-0">
                                    <input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Seu email">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
                                            <span>SUBSCREVA</span>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->

</div>
  @endsection