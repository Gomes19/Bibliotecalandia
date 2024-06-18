@extends('layouts.site.body')
@section('conteudo')

	
	<div class="page-content bg-white">
		<!--banner-->
		<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>{{$biblioteca->vc_nome}}</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Perfil</a></li>
							<li class="breadcrumb-item"></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<!--Our Mission Section-->
		<section class="content-inner overlay-white-middle">
			<div class="container">

               
                
				<div class="row about-style1 align-items-center">
					<div class="col-lg-6 m-b30">
						<div class="row sp10 about-thumb">
							<div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
								<div class="split-box">
									<div>
										<img class="m-b30" src="{{asset('images/about/about1.jpg')}}" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="split-box ">
									<div>
										<img class="m-b20 aos-item" src="{{asset('images/about/about2.jpg')}}" alt="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
									</div>
								</div>
								<div class="exp-bx aos-item"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
									<div class="exp-head">
								
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
						<div class="about-content px-lg-4">
							<div class="section-head style-1">
								<h2 class="title">{{$biblioteca->vc_nome}}</h2>
								<p>Explore os nossos livros, esperamos que tenha livros do seu agrado. Verifica se tem o livro que desejas, caso tenha e não esteja disponível em formato digital, então visite nossas instalações </p>
							</div>
							<a href="contact-us.html" class="btn btn-primary btnhover shadow-primary">Contacte-nos</a>
						</div>
					</div>
				</div>
           
			</div>
		</section>
		
		
		<!--icon-box3 section-->
		<section class="content-inner-1 bg-light">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Livros da Biblioteca </h2>
					<p>Todos nossos livros disponíveis, explore ao máximo e volte sempre que poderes! Temas interessante, livros cientificos, líricos e muito mais ...</p>
				</div>
				
			</div>

			<form class="header-item-search"  method="post" >
				@csrf
					<div class="input-group search-input">
						<select  class="default-select" name="categoria">
						<option value="all">Categorias</option>
						
							 <option>Romance </option>
						
					   
					   
					</select>
						<input type="text" name="livro" class="form-control " aria-label="Text input with dropdown button" placeholder="Buscar livros">0
						<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
					</div>
				</form>
		</section>
		

	<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					
				</div>
				
			
            
				<div class="row book-grid-row">
					@foreach($livros as $livros)
					<div class="col-book style-1">
                       	
						<div class="dz-shop-card style-1">
							<div class="dz-media">
								<img src="{{asset('images/books/grid/book16.jpg')}}" alt="book">									
							</div>
							<div class="bookmark-btn style-2">
								<input class="form-check-input" type="checkbox" id="flexCheckDefault1">
								<label class="form-check-label" for="flexCheckDefault1">
									<i class="flaticon-heart"></i>
								</label>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="books-grid-view.html">{{$livros->vc_nome}} </a></h5>
								<ul class="dz-tags">
									
									<li><a href="books-grid-view.html">{{$livros->genero}}</a></li>
								</ul>
								<ul class="dz-rating">
									<li><i class="flaticon-star text-yellow"></i></li>	
										
								</ul>
								<div class="book-footer">
									<div class="price">
										<span class="price-num"></span>
										<span>{{$livros->autor}}<span>
									</div>
									<a href="{{route('biblioteca.livro.desc',$livros->id)}}" class="btn btn-secondary box-btn btnhover btnhover2">Ver Livro</a>
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
		</section>
    
		
		
		
	
		@endsection