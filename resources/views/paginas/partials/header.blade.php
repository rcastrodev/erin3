<header class="header bg-light py-2 d-sm-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xxl-6 d-flex align-items-center justify-content-between flex-wrap text-dark">
                        <address class="mb-xs-2 mb-md-0 text-dark font-size-13">
                            <i class="fas fa-map-marker-alt text-primary"></i> {{ $data->address }}
                        </address>
                        <a href="mailto:{{ $data->email }}" class="mb-xs-2 mb-md-0 text-dark text-decoration-none font-size-13">
                            <i class="fas fa-envelope text-primary font-size-13"></i> {{ $data->email }}
                        </a>
                        <span class="mb-xs-2 mb-md-0">
                            <i class="fas fa-phone-alt text-primary font-size-13"></i> 
                            <a href="tel:" class="text-dark text-decoration-none font-size-13">{{ $data->phone1}}</a>
                        </span>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xxl-6 d-flex justify-content-end redes-sociales">
                        <a href="{{$data->facebook}}" class="pe-2 font-size-13"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$data->instagram}}" class="pe-2"><i class="fab fa-instagram font-size-13"></i></a>
                        <a href="{{$data->youtube}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar rbg-dark navbar-expand-lg navbar-light @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else position-absolute  @endif w-100" style="z-index: 10">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="@if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto')) {{ asset($data->logo_footer) }}  @else {{ asset($data->logo_header) }}  @endif" alt="" class="img-fluid logo-header">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-uppercase" id="navbarNav">
            <ul class="navbar-nav position-relative">
                <li class="nav-item @if(Request::is('/')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('/')) active @endif" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item @if(Request::is('empresa')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('empresa')) active @endif" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item cd-block @if(Request::is('secciones') || Request::is('familias') || Request::is('familia/*') || Request::is('marcas') || Request::is('marcas/*') || Request::is('producto/*')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('secciones') || Request::is('familias') || Request::is('familia/*') || Request::is('marcas') || Request::is('marcas/*') || Request::is('producto/*')) active @endif" href="{{ route('secciones') }}">Productos</a>
                    <div class="position-absolute cd-none bg-white py-4 px-3" style="width: 547px;">
                        <div class="row">
                            <div class="col-md-4 ">
                                <h6 class="font-size-13 fw-bold">Familias</h6>
                                <ul class="p-0 font-size-13" style="list-style: none">
                                    @foreach ($appCategories as $appC)
                                        <li>
                                            <a href="{{ route('familia', ['id'=> $appC->id ]) }}" class="text-uppercase text-decoration-none text-dark">{{$appC->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h6 class="font-size-13 fw-bold">Marcas</h6>
                                <ul class="p-0 font-size-13" style="list-style: none">
                                    @foreach ($appBrands as $appB)
                                        <li>
                                            <a href="{{ route('marca', ['id'=> $appB->id ]) }}" class="text-uppercase text-decoration-none text-dark">{{$appB->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h6 class="font-size-13 fw-bold">Aplicaciones</h6>
                                <ul class="p-0 font-size-13" style="list-style: none">
                                    @foreach ($appApplications as $appA)
                                        <li>
                                            <a href="{{ route('aplicacion', ['id'=> $appA->id ]) }}" class="text-uppercase text-decoration-none text-dark">{{$appA->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>  
                <li class="nav-item cd-block @if(Request::is('aplicaciones')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('aplicaciones')) active @endif" href="{{ route('aplicaciones') }}">Aplicaciones</a>
                    <div class="position-absolute cd-none bg-white py-4 px-3" style="width: 284px;">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="p-0 font-size-13" style="list-style: none">
                                    @foreach ($appApplications as $appA)
                                        <li>
                                            <a href="{{ route('aplicacion', ['id'=> $appA->id ]) }}" class="text-uppercase text-decoration-none text-dark">{{$appA->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>   
                <li class="nav-item @if(Request::is('servicios')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('servicios')) active @endif" href="{{ route('servicios') }}">Servicios</a>
                </li> 
                <li class="nav-item @if(Request::is('videos')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('videos')) active @endif" href="{{ route('videos') }}">Videos</a>
                </li>                
                <li class="nav-item @if(Request::is('clientes')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('clientes')) active @endif" href="{{ route('clientes') }}">Clientes</a>
                </li>
                <li class="nav-item @if(Request::is('solicitud-de-presupuesto')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('solicitud-de-presupuesto')) active @endif" href="{{ route('solicitud-de-presupuesto') }}" >Solicitud de presupuesto</a>
                </li>
                <li class="nav-item @if(Request::is('contacto')) position-relative @endif">
                    <a class="nav-link @if(Request::is('producto/*') || Request::is('servicios') || Request::is('videos') || Request::is('clientes') || Request::is('solicitud-de-presupuesto') || Request::is('contacto'))  @else text-white  @endif font-size-13 @if(Request::is('contacto')) active @endif" href="{{ route('contacto') }}" >Contacto</a>
                </li>
                <li class="nav-item searchHedader" style="min-width: 40px;">
                    <form action="{{ route('productos') }}" method="get" class="position-sm-static rposition" style="right: 0px;">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="b">
                            <button class="nav-link color-primario 
                                @if(Request::is('producto/*') or Request::is('servicios') or Request::is('servicios') or Request::is('videos') or Request::is('clientes') or Request::is('solicitud-de-presupuesto') or Request::is('contacto')) text-dark @else text-white  @endif font-size-13 btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>  
