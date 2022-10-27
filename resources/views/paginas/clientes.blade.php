@extends('paginas.partials.app')
@section('content')
<section id="clientes" class="py-sm-2 py-md-5">
    <div class="container pb-sm-0 p-0 pb-md-5">
        @isset($clients)
            @if(count($clients))
                <div class="d-flex flex-wrap justify-content-sm-center justify-content-md-start">
                    @foreach ($clients as $c)
                        <div class="card card-client mb-3 p-sm-0 p-md-2 mx-2">
                            <img src="{{ asset($c->image) }}" alt="" class="img-fluid" style="object-fit: contain; max-width: 165px; min-width: 165px; max-height: 95px; min-height: 95px;">
                        </div>          
                    @endforeach
                </div>
            @else
                <h3 class="tex-center">Noy hay clientes cargados aun.</h3>
            @endif
        @endisset
    </div>
</section>
@endsection