@extends('paginas.partials.app')
@section('content')
@if(count($s1))
	<div id="sliderEmpresa" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators d-sm-none d-md-block">
			@foreach ($s1 as $k => $slide)
				<button type="button" data-bs-target="#sliderEmpresa" data-bs-slide-to="{{$k}}" class="@if (!$k) active @endif" aria-current="true" aria-label="Slide {{$k}}"></button>			
			@endforeach
		</div>
		<div class="carousel-inner h-100">
			@foreach ($s1 as $k => $slide)
				<div class="carousel-item h-100 @if (!$k) active @endif" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset($slide->image) }}); background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">
					<div class="carousel-caption w-75">
						<h2 class="font-size-50 fw-bold">{{ $slide->content_1 }}</h2>
					</div>
				</div>		
			@endforeach
		</div>
	</div>
@endif
@if($s2)
	<section id="section_2" class="py-sm-2 pt-md-5">
		<div class="container py-sm-0 py-md-3">
			<div class="row">
				<div class="col-sm-12 col-md-6">{!! $s2->content_1 !!}</div>
				@if (count($sliders))
					<div class="col-sm-12 col-md-6">
						<div id="sliderCompanu" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								@foreach ($sliders as $k => $v)
									<div class="carousel-item @if(!$k) active @endif">
										<img src="{{ asset($v) }}" class="d-block w-100" style="height: 340px; object-fit: cover;">
									</div>								
								@endforeach
							</div>
							<div class="position-absolute d-flex justify-content-end" style="bottom: 0; height: 40px; right: 0; left:0;     background-color: #168fc88a;">
								<button class="bg-white text-dark d-flex justify-content-between align-items-center py-2 px-3 border-top-0 border-start-0 border-bottom-0" type="button" data-bs-target="#sliderCompanu" data-bs-slide="prev">
									<span class="" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="bg-white text-dark d-flex justify-content-between align-items-center py-2 px-3 border-top-0 border-end-0 border-bottom-0" type="button" data-bs-target="#sliderCompanu" data-bs-slide="next">
									<span class="" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</section>
@endif
@includeIf('paginas.partials.representadas')	
@endsection

       
