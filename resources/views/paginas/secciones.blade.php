@extends('paginas.partials.app')
@section('content')
<div class="d-flex justify-content-center align-items-center hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset($heroProduct->image) }});">
	<h2 class="text-center text-white fw-bold font-size-50">Productos</h2>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="d-block card producto">
                    <a href="{{ route('familias') }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px;">
                        <img src="{{ asset('images/f.png') }}" class="img-fluid" style="object-fit: contain;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            <a href="{{ route('familias') }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">Familias</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="d-block card producto">
                    <a href="{{ route('marcas') }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px;">
                        <img src="{{ asset('images/Group_3368.svg') }}" class="img-fluid" style="object-fit: contain;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            <a href="{{ route('marcas') }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">Marcas</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="d-block card producto">
                    <a href="{{ route('aplicaciones') }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px; overflow: hidden;">  
                        <img src="{{ asset('images/Image_300.png') }}" class="img-fluid" style="object-fit: contain;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">
                            <a href="{{ route('aplicaciones') }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">Aplicaciones</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
@push('scripts')
    <script src="{{ asset('js/pages/product.js') }}"></script>
@endpush
