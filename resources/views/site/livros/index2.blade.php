@extends('layouts.site.body')
@section('conteudo')
<div class="page-content bg-grey">
		<div class="content-inner-1 border-bottom">
			<div class="container">
				<div class="row">
					
					<div class="col-xl-12">
						<div class="d-flex justify-content-between align-items-center">
							<h4 class="title">Livros</h4>
							<a href="javascript:void(0);" class="btn btn-primary panel-btn">Filter</a>
						</div>
						<div class="filter-area m-b30 ">
					<div class="grid-area">
						<div class="shop-tab">
							<ul class="nav text-center product-filter justify-content-end" role="tablist">
							
							
							  <?php
        $generos=App\Models\sub_categoria::get();
    ?>
            <!-- header search nav -->
            <div class="header-search-nav">
                <form class="header-item-search" action="{{ route('site.pesquisa.livro') }}" method="post">
                @csrf
                    <div class="input-group search-input">
                        <select  class="default-select" name="categoria">
                        <option value="all">Categorias</option>
                        @foreach ($generos as $genero)
                             <option value="{{ $genero->id }}">{{ $genero->vc_nome }} </option>
                        @endforeach
                       
                       
                    </select>
                        <input type="text" name="livro" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar livros">0
                        <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                    </div>
                </form>
            </div>
							</ul>
						</div>
					</div>
					<div class="category">
						<div class="filter-category">
							<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-list me-2"></i>
								Categorias
							</a>
						</div>
				
					</div>
				</div>	
						<div class="row book-grid-row">
							
						
{{-- @dd($livros) --}}
                            @foreach ($livros as $livro)
                                <div class="col-book style-2">
								<div class="dz-shop-card style-1">
									<div class="dz-media">
										<img src="{{ asset($livro->vc_path) }}" alt="book">										
									</div>
									<div class="bookmark-btn style-2">
										<input class="form-check-input" type="checkbox" id="flexCheckDefault5">
										<label class="form-check-label" for="flexCheckDefault5">
											<i class="flaticon-heart"></i>
										</label>
									</div>
									<div class="dz-content">
										<h5 class="title"><a href="books-grid-view.html">{{ $livro->vc_nome }}</a></h5>
										<ul class="dz-tags">
											<li>{{ $livro->categoria }},</a></li>
											<li>{{ $livro->genero }}</a></li>
										</ul>
										<ul class="dz-rating">
											<li><i class="flaticon-star text-yellow"></i></li>	
											<li><i class="flaticon-star text-yellow"></i></li>	
											<li><i class="flaticon-star text-yellow"></i></li>	
											<li><i class="flaticon-star text-yellow"></i></li>		
											<li><i class="flaticon-star text-muted"></i></li>		
										</ul>
										<div class="book-footer">
											<div class="price">
												<span class="price-num">{{ $livro->preco }}Kz</span>
												
											</div>
											<a href="{{route('site.livro.desc',$livro->id)}}" class="btn btn-secondary box-btn btnhover btnhover2">Ver Livro</a>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
							
						
						</div>
						<div class="row page mt-0">
							<div class="col-md-6">
								<p class="page-text">Showing 12 from 50 data</p>
							</div>
							<div class="col-md-6">
								<nav aria-label="Blog Pagination">
									<ul class="pagination style-1 p-t20">
										<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
										<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Client Start-->
	
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