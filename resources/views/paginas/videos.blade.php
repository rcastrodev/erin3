@extends('paginas.partials.app')
@section('content')
<section id="videos" class="py-sm-2 py-md-5">
    <div class="container">
        <div class="row">
            @isset($posts)
                @if(count($posts))
                    @foreach ($posts as $p)
                        <div class="col-sm-12 col-md-4 mb-sm-4 mb-md-0">
                            <div class="card">
                                {!! $p->extra1 !!}
                                <div class="card-body">
                                    <h5 class="card-title font-size-18">{{ $p->title }}</h5>
                                    <p class="card-text font-size-16">{{ $p->content1 }}</p>
                                </div>
                            </div>
                        </div>             
                    @endforeach   
                @else
                    <div class="col-sm-12 text-center">No hay videos cargados</div>         
                @endif
            @endisset
        </div>
    </div>
</section>
@endsection