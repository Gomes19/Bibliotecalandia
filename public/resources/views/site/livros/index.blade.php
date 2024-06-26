@extends('layouts.site.body')
@section('conteudo')
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
    {{-- @dd($livro) --}}
        <!-- Start: Page Banner -->
        <div class="page-content bg-grey">
            <section class="content-inner-1">
                <div class="container">
                    <div class="row book-grid-row style-4 m-b60">
                        <div class="col">
                            <div class="dz-box">
                                <div class="dz-media">
                                    <img src="{{$livro->vc_path}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <div class="dz-header">
                                        <h3 class="title">{{$livro->vc_nome}}</h3>
                                        <div class="shop-item-rating">
                                            <div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
                                                <ul class="dz-rating">
                                                    <li><i class="flaticon-star text-yellow"></i></li>	
                                                    <li><i class="flaticon-star text-yellow"></i></li>	
                                                    <li><i class="flaticon-star text-yellow"></i></li>	
                                                    <li><i class="flaticon-star text-yellow"></i></li>		
                                                    <li><i class="flaticon-star text-muted"></i></li>		
                                                </ul>
                                                <h6 class="m-b0">4.0</h6>
                                            </div>
                                            <div class="social-area">
                                                <ul class="dz-social-icon style-3">
                                                    <li><a href="https://www.facebook.com/dexignzone" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                    <li><a href="https://twitter.com/dexignzones" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                                    <li><a href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                    <li><a href="https://www.google.com/intl/en-GB/gmail/about/" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-body">
                                        <div class="book-detail">
                                            <ul class="book-info">
                                                <li>
                                                    <div class="writer-info">
                                                        <img src="images/profile2.jpg" alt="book">
                                                        <div>
                                                            <span>Escrito Por:</span>{{$livro->autor}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><span>Editora</span>{{$livro->editora}}</li>
                                                <li><span>Data de Lançamento</span>{{$livro->ano}}</li>
                                            </ul>
                                        </div>
                                        <p class="text-1">{{$livro->vc_desc}}</p>
                                        <div class="book-footer">
                                            <div class="price">
                                                @if($livro->preco==0)
                                                    <h5><a href="{{ asset($livro->vc_livro) }}">Ler Livro {{ $livro->vc_nome }}</a></h5>
                                                @else
                                                <h5>{{$livro->preco}}</h5>
                                                @endif
                                            </div>
                                            <div class="product-num">
                                                <div class="quantity btn-quantity style-1 me-3">
                                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                                </div>
                                                <a href="shop-cart.html" class="btn btn-primary btnhover btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Adicionar ao Carrinho</span></a>
                                                <div class="bookmark-btn style-1 d-none d-sm-block">
                                                    <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                                    <label class="form-check-label" for="flexCheckDefault1">
                                                        <i class="flaticon-heart"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="product-description tabs-site-button">
                                <ul class="nav nav-tabs">
                                    <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">Detalhes d Livro</a></li>
                                    {{-- <li><a data-bs-toggle="tab" href="#developement-1">C</a></li> --}}
                                </ul>
                                <div class="tab-content">
                                    <div id="graphic-design-1" class="tab-pane show active">
                                        <table class="table border book-overview">
                                            <tr>
                                                <th>Titulo do Livro</th>
                                                <td>{{$livro->vc_mome}}</td>
                                            </tr>
                                            <tr>
                                                <th>Autor</th>
                                                <td>{{$livro->autor}}</td>
                                            </tr>
                                            <tr>
                                                <th>ISBN</th>
                                                <td>{{$livro->isbn}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <th>Ediiton Language</th>
                                                <td>English</td>
                                            </tr> --}}
                                            <tr>
                                                <th>Formato do Livro</th>
                                                <td>{{$livro->categoria}}</td>
                                            </tr>
                                            <tr>
                                                <th>Data de Publicação</th>
                                                <td>{{$livro->ano}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <th>Publisher</th>
                                                <td>Wepress Inc.</td>
                                            </tr> --}}
                                            <tr>
                                                <th>Paginas</th>
                                                <td>{{$livro->qt_page}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <th></th>
                                                <td>7</td>
                                            </tr> --}}
                                            {{-- <tr>
                                                <th>Topic</th>
                                                <td>360</td>
                                            </tr> --}}
                                            {{-- <tr class="tags">
                                                <th>Tags</th>
                                                <td>
                                                    <a href="javascript:void(0);" class="badge">Drama</a>
                                                    <a href="javascript:void(0);" class="badge">Advanture</a>
                                                    <a href="javascript:void(0);" class="badge">Survival</a>
                                                    <a href="javascript:void(0);" class="badge">Biography</a>
                                                    <a href="javascript:void(0);" class="badge">Trending2022</a>
                                                    <a href="javascript:void(0);" class="badge">Bestseller</a>
                                                </td>
                                            </tr> --}}
                                        </table>
                                    </div>
                                    {{-- <div id="developement-1" class="tab-pane">
                                        <div class="clear" id="comment-list">
                                            <div class="post-comments comments-area style-1 clearfix">
                                                <h4 class="comments-title">4 COMMENTS</h4>
                                                <div id="comment">
                                                    <ol class="comment-list">
                                                        <li class="comment even thread-even depth-1 comment" id="comment-2">
                                                            <div class="comment-body">
                                                              <div class="comment-author vcard">
                                                                    <img src="images/profile4.jpg" alt="" class="avatar"/>
                                                                    <cite class="fn">Michel Poe</cite> <span class="says">says:</span>
                                                                    <div class="comment-meta">
                                                                        <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                                    </div>
                                                              </div>
                                                          <div class="comment-content dlab-page-text">
                                                             <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                          </div>
                                                          <div class="reply">
                                                             <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                                                          </div>
                                                       </div>
                                                       <ol class="children">
                                                          <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
                                                             <div class="comment-body" id="div-comment-3">
                                                                <div class="comment-author vcard">
                                                                   <img src="images/profile3.jpg" alt="" class="avatar"/>
                                                                   <cite class="fn">Celesto Anderson</cite> <span class="says">says:</span>
                                                                   <div class="comment-meta">
                                                                      <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                                   </div>
                                                                </div>
                                                                <div class="comment-content dlab-page-text">
                                                                   <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                                </div>
                                                                <div class="reply">
                                                                   <a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                                                                </div>
                                                             </div>
                                                          </li>
                                                       </ol>
                                                    </li>
                                                    <li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
                                                       <div class="comment-body" id="div-comment-4">
                                                          <div class="comment-author vcard">
                                                             <img src="images/profile2.jpg" alt="" class="avatar"/>
                                                             <cite class="fn">Ryan</cite> <span class="says">says:</span>
                                                             <div class="comment-meta">
                                                                <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                             </div>
                                                          </div>
                                                          <div class="comment-content dlab-page-text">
                                                             <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                          </div>
                                                          <div class="reply">
                                                             <a class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                                                          </div>
                                                       </div>
                                                    </li>
                                                    <li class="comment odd alt thread-even depth-1 comment" id="comment-5">
                                                       <div class="comment-body" id="div-comment-5">
                                                          <div class="comment-author vcard">
                                                             <img src="images/profile1.jpg" alt="" class="avatar"/>
                                                             <cite class="fn">Stuart</cite> <span class="says">says:</span>
                                                             <div class="comment-meta">
                                                                <a href="javascript:void(0);">December 28, 2022 at 6:14 am</a>
                                                             </div>
                                                          </div>
                                                          <div class="comment-content dlab-page-text">
                                                             <p>Donec suscipit porta lorem eget condimentum. Morbi vitae mauris in leo venenatis varius. Aliquam nunc enim, egestas ac dui in, aliquam vulputate erat.</p>
                                                          </div>
                                                          <div class="reply">
                                                             <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                                                          </div>
                                                       </div>
                                                    </li>
                                                 </ol>
                                              </div>
                                              <div class="default-form comment-respond style-1" id="respond">
                                                 <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small> <a rel="nofollow" id="cancel-comment-reply-link" href="javascript:void(0)" style="display:none;">Cancel reply</a> </small></h4>
                                                 <div class="clearfix">
                                                    <form method="post" id="comments_form" class="comment-form" novalidate>
                                                       <p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
                                                       <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
                                                       <p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
                                                       <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                          <button id="submit" type="submit" class="submit btn btn-primary filled">
                                                          Submit Now <i class="fa fa-angle-right m-l10"></i>
                                                          </button>
                                                       </p>
                                                    </form>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 mt-5 mt-xl-0">
                            <div class="widget">
                                <h4 class="widget-title">Livros Relacionados</h4>
                                {{-- @dd($relacionados) --}}
                                <div class="row">
                                    @foreach ($relacionados as $livro)
                                        
                                  
                                    <div class="col-xl-12 col-lg-6">
                                        <div class="dz-shop-card style-5">
                                            <div class="dz-media">
                                                <img src="images/books/grid/book15.jpg" alt="">
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="subtitle">{{$livro->vc_nome}}</h5>
                                                <ul class="dz-tags">
                                                    <li>{{$livro->vc_nome}},</li>
                                                    <li>{{$livro->categoria}},</li>
                                                    <li>{{$livro->genero}}</li>
                                                </ul>
                                                <div class="price">
                                                    @if($livro->preco==0)
                                                    <span class="price">Gratis</span>
                                                    @else
                                                    <span class="price">{{$livro->preco}}kz</span>
                                                    @endif
                                                </div>
                                                <a href="{{route('site.livro.desc',$livro->id)}}" class="btn btn-outline-primary btn-sm btnhover btnhover2"><i class="flaticon-shopping-cart-1 me-2"></i> 
                                                    Ver Detalhes</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
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
            
            <!-- Feature Box -->
            <section class="content-inner">
                <div class="container">
                    <div class="row sp15">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="icon-bx-wraper style-2 m-b30 text-center">
                                <div class="icon-bx-lg">
                                    <i class="fa-solid fa-users icon-cell"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dz-title counter m-b0">125,663</h2>
                                    <p class="font-20">Happy Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="icon-bx-wraper style-2 m-b30 text-center">
                                <div class="icon-bx-lg"> 
                                    <i class="fa-solid fa-book icon-cell"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dz-title counter m-b0">50,672</h2>
                                    <p class="font-20">Book Collections</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="icon-bx-wraper style-2 m-b30 text-center">
                                <div class="icon-bx-lg"> 
                                    <i class="fa-solid fa-store icon-cell"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dz-title counter m-b0">1,562</h2>
                                    <p class="font-20">Our Stores</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="icon-bx-wraper style-2 m-b30 text-center">
                                <div class="icon-bx-lg"> 
                                    <i class="fa-solid fa-leaf icon-cell"></i>
                                </div>
                                <div class="icon-content">
                                    <h2 class="dz-title counter m-b0">457</h2>
                                    <p class="font-20">Famous Writers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature Box End -->
            
            <!-- Newsletter -->
            <section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
                <div class="container">
                    <div class="subscride-inner">
                        <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                            <div class="col-xl-7 col-lg-12">
                                <div class="section-head mb-0">
                                    <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <form class="dzSubscribe style-1" action="script/mailchamp.php" method="post">
                                    <div class="dzSubscribeMsg"></div>
                                    <div class="form-group">
                                        <div class="input-group mb-0">
                                            <input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
                                                    <span>SUBSCRIBE</span>
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