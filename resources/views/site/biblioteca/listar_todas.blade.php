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
	
	<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">TODAS BIBLIOTECAS</h4>
				</div>
				<div class="filter-area m-b30 ">
					<div class="grid-area">
						<div class="shop-tab">
							<ul class="nav text-center product-filter justify-content-end" role="tablist">
							
							
								<form action="{{route('biblioteca.search') }}" method="POST">
								@csrf
									<div class="input-group search-input">
										<div class="input-group search-input" >
												<input type="text" id="search" name="search" class="form-control " aria-label="Text input with dropdown button" placeholder="Buscar Bibliotecas" style="margin-top:.1rem;margin-lef:5rem">
												<button class="btn" type="submit"><i class="flaticon-loupe"></i></button>
											</div>
									</div>
									
								</form>
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
				<div class="acod-content collapse" id="collapseExample">
					<div class="widget widget_services">
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox1">
							<label class="form-check-label" for="productCheckBox1">
								Universitária
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox2">
							<label class="form-check-label" for="productCheckBox2">
								Pública
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox3">
							<label class="form-check-label" for="productCheckBox3">
								Temática
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox4">
							<label class="form-check-label" for="productCheckBox4">
								Institucional
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox5">
							<label class="form-check-label" for="productCheckBox5">
								Body, Mind & Spirit
							</label>
						</div>
						<div class="form-check search-content">
							<input class="form-check-input" type="checkbox" value="" id="productCheckBox6">
							<label class="form-check-label" for="productCheckBox6">
								Privada
							</label>
						</div>
					</div>
				</div>

	@foreach ($bibliotecas as $biblioteca)
				
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="dz-shop-card style-2">
							<div class="dz-media">
								<img src="images/books/grid/book12.jpg" alt="book">									
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<div>
										<ul class="dz-tags">
											<li><a href="books-list.html">{{$biblioteca->categoria}}</a></li>
										
										</ul>
										<h4 class="title mb-0"><a href="books-list.html">{{$biblioteca->vc_nome}}</a></h4>
									</div>
									<div class="price">
										
										
									</div>
								</div>
								
								<div class="dz-body">
									<div class="dz-rating-box">
										<div>
											<p class="dz-para">O comprimisso com o ecossistema literário é uma prioridade para nós, oferecemos um abiente favorável em nossa biblioteca, temos livros variados para todo o gosto e necessidade, venha conhecer a nossa biblioteca e explore o mundo da literatura connosco. Clica em Ver Biblioteca e veja nossos livros para ler em nossa biblioteca e até alguns livros a venda.</p>
											<div>
												<a href="pricing.html" class="badge">Segunda - Terça - Quarta - Quinta - Sexta</a>
												<a href="pricing.html" class="badge">Aberto</a>
											<!--	<a href="pricing.html" class="badge next-badge">See 2+ promos</a> -->
											</div>
										</div>
										<div class="review-num">
											
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>		
												<li><i class="flaticon-star text-muted"></i></li>		
											</ul>
											<span><a href="javascript:void(0);"> {{$biblioteca->nif}}</a></span>
										</div>
									</div>
									<div class="rate">
										<ul class="book-info">
											<li><span>Endereço</span>{{$biblioteca->endereco}} </li>
									
										</ul>
										<div class="d-flex">
											<a href="{{route('ver.biblioteca.show',['id' =>$biblioteca->id])}}" class="btn btn-secondary btnhover btnhover2">Veja nossa Biblioteca</a>
											<div class="bookmark-btn style-1">
												<input class="form-check-input" type="checkbox" id="flexCheckDefault1">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					@endforeach		
					
				</div>
				<div class="row page mt-0">
					<div class="col-md-6">
						<!--<p class="page-text">Mostrando 12 from 50 data</p> -->
					</div>
					<div class="col-md-6">
						<nav aria-label="Blog Pagination">
						<ul class="pagination style-1 p-t20">
							<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Anterior</a></li>
							<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
							<li class="page-item"><a class="page-link next" href="javascript:void(0);">Próximo</a></li>
						</ul>
					</nav>
					</div>
				</div>
			</div>
		</section>
		
		
	

	
	</div>
	


			
		@endsection