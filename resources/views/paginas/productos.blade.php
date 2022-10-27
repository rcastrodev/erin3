@extends('paginas.partials.app')
@section('content')
<div class="hero d-flex justify-content-center align-items-center hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset($heroProduct->image) }});">
	<h2 class="text-center text-white fw-bold font-size-50">{{ $heroProduct->content_1 }}</h2>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            @isset($products)
                @if (count($products))
                    @foreach ($products as $p)
                        <div class="col-sm-12 col-md-3 mb-3">
                            <div class="d-block card producto">
                                @if (count($p->brands))
                                    @if (count($p->brands) == 1)
                                        @if ($p->brands()->first()->icon)
                                            <img src="{{asset($p->brands()->first()->icon)}}"  class="position-absolute" style="z-index: 100; max-height: 50px;right: 5px; top: 5px;">
                                        @endif
                                    @else 
                                        <span class="position-absolute fw-bold" style="z-index: 100; max-height: 50px;right: 5px; top: 5px;">Varias marcas</span>   
                                    @endif
                                @endif
                                <a href="{{ route('producto', ['id'=> $p->id]) }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px;">
                                    @if (count($p->images))
                                        <img src="{{ asset($p->images()->first()->image) }}" class="img-fluid position-relative" style="object-fit: contain;     right: 20px; top: 20px;" width="172" height="62">
                                    @endif
                                </a>
                                <div class="card-body">
                                    <p class="card-text">
                                        <a href="{{ route('producto', ['id'=> $p->id]) }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">{{$p->name}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>  
                    @endforeach  
                @else
                    <h3 class="text-center col-sm-12">No hay productos de {{ $element->name }}</h3>
                @endif      
            @endisset
        </div>
    </div>
</div>  
@endsection
@push('scripts')
@endpush
