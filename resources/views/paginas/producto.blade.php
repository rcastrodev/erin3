@extends('paginas.partials.app')
@section('content')
@isset($product)
    <div class="py-5">
        <div class="container">
            <div class="row">
                <aside class="col-sm-12 col-md-3 d-sm-none d-md-block">
                    @isset($appCategories)
                        @if (count($appCategories))
                            <ul class="p-0" style="list-style: none;">
                                @foreach ($appCategories as $ck => $cv)
                                    <li class="py-2 @if($cv->name == $product->category->name) active @endif">
                                        <a href="#" class="toggle d-block p-2 text-decoration-none  text-decoration-none 
                                        {{ ($cv->name == $product->category->name) ? 'text-white' : 'text-dark' }}">{{ $cv->name }}</a>
                                        <ul class="mt-3 ps-0 {{ ($cv->name == $product->category->name) ? '' : 'rd-none' }}" style="list-style: none">
                                            @foreach ($cv->products as $p)
                                                <li>
                                                    <a href="{{ route('producto', ['id'=> $p->id ]) }}" class="text-dark text-decoration-none d-block py-1 ms-4 {{ ($p->name == $product->name) ? 'active' : '' }}"> {{ $p->name }} </a>
                                                </li>                            
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>            
                        @endif   
                    @endisset
                </aside>
                <section class="producto col-sm-12 col-md-9 font-size-14">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-5">
                            <div id="carruselProducto" class="carousel slide carousel-fade border border-light border-2 mb-3" data-bs-ride="carousel" style="">
                                <div class="carousel-inner">
                                    @if (count($product->images))
                                        @foreach ($product->images as $pk => $pv)
                                            <div class="carousel-item @if(!$pk) active @endif">
                                                <img src="{{ asset($pv->image) }}" class="d-block w-100 img-fluid" style="object-fit: contain;
                                                min-width: 100%; max-width: 100%; height: 350px;">
                                            </div>    
                                        @endforeach
                                    @else
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/default.jpg') }}" class="d-block w-100 img-fluid" style="object-fit: contain;
                                            min-width: 100%; max-width: 100%;" alt="">
                                        </div>   
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carruselProducto" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carruselProducto" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> 
                        </div>
                        <div class="col-sm-12 col-md-7 d-flex flex-column justify-content-between">
                            <div class="">
                                @if(count($product->brands) == 1)
                                    @if ($product->brands()->first()->icon)
                                        <img src="{{ asset($product->brands()->first()->icon) }}" class="d-block mb-5">
                                    @endif
                                @elseif(count($product->brands) > 1)
                                    <span class="fw-bold">Varias marcas</span>
                                @endif
                                <h1 class="mb-3 font-size-28 fw-bold">{{ $product->name }}</h1>
                                <p class="font-size-15">{!! $product->description !!}</p>
                            </div>
                            <div class="d-flex justify-content-sm-center justify-content-md-start flex-wrap">
                                @if($product->data_sheet)
                                    <a href="{{ route('ficha-tecnica', ['id'=>$product->id]) }}" class="me-sm-0 me-md-3 mb-sm-3 mb-md-0 px-3 d-flex justify-content-between align-items-center btn ficha-tecnica font-size-15 w-sm-100 w-md-50" style="width: 180px;">
                                        <span class="text-uppercase">ficha técnica</span>
                                        <i class="fas fa-download"></i>
                                    </a>       
                                @endif
                                <a href="{{ route('contacto') }}" class="btn fondo-primario text-white bg-primary fw-bold py-2 px-5 text-uppercase font-size-15 w-sm-100 w-md-50" style="border-radius: 0px;">Consultar</a>
                            </div>
                        </div>
                    </div>    
                    @if($product->extra1 or $product->extra2)
                        <div class="row mb-5">
                            <div class="col-sm-12">
                                <h5 class="text-uppercase mb-3 p-2 text-uppercase text-white font-size-20 bg-primary">videos</h5>
                            </div>
                            <div class="col-sm-12 col-md-6">{!! $product->extra1 !!}</div>
                            <div class="col-sm-12 col-md-6">{!! $product->extra2 !!}</div>
                        </div>                       
                    @endif                 
                </section>
            </div>
        </div>
    </div>
@endisset
@endsection
@push('scripts')
    <script src="{{ asset('js/pages/product.js') }}"></script>
@endpush
