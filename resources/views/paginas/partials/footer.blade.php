<footer class="font-size-14 text-sm-center text-md-start">
    <div class="row justify-content-between">
        <div class="col-sm-12 col-md-3 py-sm-3 py-md-5 bg-light plogo-footer" style="">
            <a href="{{ route('index') }}"><img src="{{ asset($data->logo_footer) }}" style="width: 119px; height: 43px;"></a>
            <p class="my-4">{{ $data->text_footer }}</p>
            <div class="">
                <a href="{{ $data->facebook }}"><img src="{{ asset('images/facebook.svg') }}" class="me-2"></a>
                <a href="{{ $data->instagram }}"><img src="{{ asset('images/ig.svg') }}" class="me-2"></a>
                <a href="{{ $data->youtube }}"><img src="{{ asset('images/linkedin.svg') }}"></a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 py-sm-2 py-md-5 bg-primary d-sm-none d-md-block">
            <div class="row justify-content-between">
                <div class="col-sm-12">    
                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="text-uppercase text-white font-weight-600">secciones</h6>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a href="{{ route('empresa') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Empresa</a>
                            <a href="{{ route('productos') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Productos</a>
                            <a href="{{ route('aplicaciones') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Aplicaciones</a>
                            <a href="{{ route('servicios') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Servicios</a>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a href="{{ route('videos') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Videos</a>
                            <a href="{{ route('clientes') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Clientes</a>
                            <a href="{{ route('solicitud-de-presupuesto') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Solicitud de presupuesto</a>
                            <a href="{{ route('contacto') }}" class="d-block text-uppercase text-decoration-none text-light mb-1">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 mb-sm-4 mb-md-0 py-sm-2 py-md-5 bg-primary newsletter d-sm-none d-md-block">
            <h6 class="text-uppercase text-white font-weight-600">SUSCRIBITE AL NEWSLETTER</h6>
            <form action="{{ route('newsletter.store') }}" id="formNewsletter" style="width: 250px;">
                @csrf
                <div class="">
                    <label class="visually-hidden" for="">Username</label>
                    <div class="input-group font-size-12">
                        <input type="email" name="email" autocomplete="off" class="form-control font-size-12 bg-white" placeholder="Ingresa tu email" style="border-radius: 0;">
                        <button type="submit" id="" class="input-group-text bg-white text-primary" style="border-radius: 0;"><i class="far fa-paper-plane color-white"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-12 col-md-3 font-size-13 px-sm-3 px-md-0 py-sm-3 py-md-5 bg-primary">
            <div class="row">
                <h6 class="text-uppercase text-white font-weight-600">contacto</h6>
                <div class="d-flex">
                    <i class="fas fa-map-marker-alt text-white d-block me-2 mb-3"></i>
                    <address class="d-block text-light m-0"> {{ $data->address }}</address>
                </div>
                <div class="d-flex">
                    <i class="fas fa-phone-alt text-white d-block me-2 mb-3"></i>
                    <a href="tel:{{ $data->phone1 }}" class="text-light text-decoration-none">{{ $data->phone1 }}</a>
                </div>
                <div class="d-flex">
                    <i class="far fa-envelope text-white d-block me-2 mb-3"></i><span class="d-block"></span>
                    <a href="mailto:{{ $data->email }}" class="text-light text-decoration-none">{{ $data->email }}</a>             
                </div>
            </div>
        </div>
    </div>
</footer>
@if (Request::is('aplicacion/*'))
    @if ($element->telephone)
        <a href="https://wa.me/{{$element->telephone}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>   
    @else
        <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a> 
    @endif
@elseif(Request::is('producto/*'))
    @if (count($product->applications) == 1)
        @if ($product->applications()->first()->telephone)
            <a href="https://wa.me/{{$product->applications()->first()->telephone}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
                <i class="fab fa-whatsapp"></i>
            </a>   
        @else
            <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
                <i class="fab fa-whatsapp"></i>
            </a> 
        @endif
    @else
        <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a> 
    @endif
@else
    @if($data->phone3)
        <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>     
    @endif
@endif
