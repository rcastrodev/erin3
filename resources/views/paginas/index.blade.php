@extends('paginas.partials.app')
@section('content')
@if(count($sliders))
	<div id="sliderHero" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators d-sm-none d-md-block">
			@foreach ($sliders as $k => $slide)
				<button type="button" data-bs-target="#sliderHero" data-bs-slide-to="{{$k}}" class="@if (!$k) active @endif" aria-current="true" aria-label="Slide {{$k}}"></button>			
			@endforeach
		</div>
		<div class="carousel-inner h-100">
			@foreach ($sliders as $k => $slide)
				<div class="carousel-item h-100 @if (!$k) active @endif" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset($slide->image) }}); background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">
					<div class="carousel-caption w-75">
						<h2 class="font-size-62 fw-bold">{{ $slide->content_1 }}</h2>
						<p class="font-size-20 mb-5 fw-normal">{{ $slide->content_2 }}</p>
						<a href="{{ route('contacto') }}" class="bg-light color-primary text-primary px-4 py-2 text-decoration-none font-size-20 fw-bold"> Más información</a>
					</div>
				</div>			
			@endforeach
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#sliderHero" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#sliderHero" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
@endif
@if ($appsHero)
<section id="section2" class="position-relative" style="bottom: 90px;">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-between">
			@foreach ($appsHero as $ah)
				<div class="position-relative pt-sm-0 pt-md-5 px-4 pb-3 bg-light mb-sm-3 mb-md-0" style="width: 287px; height: 290px;">
					<div class="position-absolute bg-primary p-4 d-sm-none d-md-flex justify-content-center" style="top: -50px; left: 0; width: 102px;">
						<img src="{{ asset($ah->image) }}" alt="">
					</div>
					<div class="pt-4 text-sm-center text-md-start">
						<h3 class="mb-4 fw-bold font-size-24 text-sm-center text-md-start">{{$ah->content_1}}</h3>
						@if($ah->content_2) <p class="font-size-16 mb-4 ">{{$ah->content_2}}</p> @endif
						@if($ah->content_3) <img src="{{ asset($ah->content_3) }}" alt="" class="d-block mb-4 mx-auto ms-md-0" style="width: 120px; height: 46px;"> @endif
						@if ($ah->content_4)
							<a href="{{$ah->content_4}}" class="text-primary fw-bold text-decoration-none font-size-18">Más información</a>
						@endif
					</div>
				</div>				
			@endforeach
		</div>
	</div>
</section>
@endif
@if($s3)
<div id="section3">
	<div class="row align-items-center">
		<div class="col-sm-12 col-md-6">
			<img src="{{ asset($s3->image) }}" class="img-fluid" style="width: 100%; object-fit: cover; min-height: 383px; max-height: 383px;">
		</div>
		<div class="col-sm-12 col-md-6 ps-sm-3 pe-md-5 p-sm-2">
			<h5 class="font-size-24 text-primary">{{$s3->content_1}}</h5>
			<p class="fw-bold font-size-30 mb-5" style="line-height: 35px;">{{$s3->content_2}}</p>
			<a href="{{ route('contacto') }}" class="bg-primary text-white font-size-20 text-center text-decoration-none py-2 px-4 fw-600 d-sm-block d-md-inline m-sm-4 m-md-0">Más información</a>
		</div>
	</div>
</div>
@endif
@includeIf('paginas.partials.representadas')
@if ($s4)
	<div id="section4" class="row align-items-center justify-content-center" style="height: 416px; background-image: url({{ asset($s4->image) }}); background-blend-mode: multiply; background-color: #168fc8bf !important; background-repeat: no-repeat; background-size: 100% 100%;
		background-position: center;">
		<div class="col-sm-12 col-md-5 text-center text-white">
			<h5 class="font-size-24">{{$s4->content_1}}</h5>
			<h3 class="mb-5 font-size-30 fw-bold">{{$s4->content_2}}</h3>
			<a href="{{ route('solicitud-de-presupuesto') }}" class="btn bg-white text-primary fw-bold px-4 py-2 font-size-20" style="border-radius: 0">Solicitar presupuesto</a>
		</div>
	</div>	
@endif
@endsection
