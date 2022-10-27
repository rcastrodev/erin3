@extends('paginas.partials.app')
@section('content')
<div class="hero d-flex justify-content-center align-items-center hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.1)), url({{ asset('images/company/Image_59.png') }});">
	<h2 class="text-center text-white fw-bold font-size-50">Familias</h2>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($appCategories as $c)
                <div class="col-sm-12 col-md-3 mb-4">
                    <div class="d-block card producto">
                        <a href="{{ route('familia', ['id'=> $c->id]) }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px;">
                            @if ($c->image)
                                <img src="{{ asset($c->image) }}" class="img-fluid" style="object-fit: contain; max-height: 82px;" width="172" height="82">
                            @endif
                        </a>
                        <div class="card-body">
                            <p class="card-text">
                                <a href="{{ route('familia', ['id'=> $c->id]) }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">{{ $c->name }}</a>
                            </p>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
</div>  
@endsection
@push('scripts')
@endpush
