@extends('paginas.partials.app')
@section('content')
<section id="service" class="py-sm-2 py-md-5">
    <div class="container pt-sm-0 pt-md-5">
        <div class="row m-0">
            @isset($posts)
                @if(count($posts))
                    @foreach ($posts as $s)
                        <div class="col-sm-12 col-md-6 col-service">
                            <div class="pt-4 px-2 pb-3 bg-light position-relative" style="min-height: 227px;">
                                <div class="position-absolute bg-primary d-sm-none d-md-block p-4 d-flex justify-content-center" style="top: -50px; left: 0; width: 102px;">
                                    <img src="{{ asset($s->image) }}">
                                </div>                        
                                <h3 class="fw-bold font-size-22 mb-sm-2 mb-md-4 title-service">{{ $s->title }}</h3>
                                <div class="px-sm-2 px-md-4">
                                    <p class="font-size-16 mb-4">{!! $s->content1 !!}</p>
                                    <a href="{{ route('contacto') }}" class="position-sm-static position-md-absolute text-primary fw-bold text-decoration-none font-size-18" style="bottom: 18px;">Consultar</a>
                                </div>
                            </div>
                        </div>       
                    @endforeach
                @else
                    <h3 class="col-sm-12 text-center">No hay servicios cargados</h3>
                @endif
            @endisset
        </div>
    </div>
</section>

@endsection
@push('scripts')
@endpush