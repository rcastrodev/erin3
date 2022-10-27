@extends('paginas.partials.app')
@section('content')
<div class="hero d-flex justify-content-center align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset($element->image) }}); height: 70vh;">
	<h2 class="text-center text-white fw-bold font-size-50">{{  $element->name }}</h2>
</div>
<section id="application" class="font-size-30 my-3">
    <div class="container">
        @if ($element->image_small)
            <img src="{{ asset($element->image_small) }}" class="img-fluid" style="object-fit: contain; max-width: 100px;"> 
            <span>|</span>       
        @endif
        <strong class="ms-2">{{ $element->name }}</strong>
    </div>
</section>
<div id="applications" class="py-5">
    <div class="container">
        <div class="row">
            @isset($products)
                @if (count($products))
                    @foreach ($products as $p)
                    <div class="col-sm-12 col-md-3 mb-3">
                        @includeIf('paginas.partials.producto', ['p' => $p])
                    </div>                       
                    @endforeach
                @else 
                    <div class="col-sm-12 text-center">
                        <h3>No tenemos productos que coincida con esta aplicación</h3>
                    </div>
                @endif 
            @endisset
        </div>
    </div>
</div>  
@endsection
@push('scripts')
@endpush