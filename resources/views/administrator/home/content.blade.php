@extends('adminlte::page')
@section('title', 'Contenido home')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Contenido del home</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear Slider</button>
    </div>
@stop
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Pre título</th>
                    <th>Título</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@if (count($section2))
    <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
            @foreach ($section2 as $k => $s2)
                <li class="nav-item"> 
                    <a class="nav-link" id="custom-tabs-two-{{$s2->id}}-tab" data-toggle="pill" href="#custom-tabs-two-{{$s2->id}}" role="tab" aria-controls="custom-tabs-two-{{$s2->id}}" aria-selected="false"> Aplicación {{++$k}} </a>
                </li>
            @endforeach
        </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-two-tabContent">
                @foreach ($section2 as $k => $s2)
                    <div class="tab-pane fade" id="custom-tabs-two-{{$s2->id}}" role="tabpanel" aria-labelledby="custom-tabs-two-{{$s2->id}}-tab">
                        <form action="{{ route('home.content.update') }}" class="row mb-3" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$s2->id}}">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="">Título</label>
                                <input type="text" name="content_1" value="{{$s2->content_1}}" class="form-control" placeholder="Título">
                            </div>
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="">Icono</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>   
                            <div class="form-group col-sm-12 col-md-3">
                                <label for="">Imagen</label>
                                <input type="file" name="content_3" class="form-control-file">
                            </div> 
                            <div class="form-group col-sm-12 col-md-12">
                                <input type="text" name="content_2" value="{{$s2->content_2}}" class="form-control" placeholder="Parrafo">
                            </div>
                            <div class="form-group col-sm-12 col-md-10">
                                <input type="text" name="content_4" value="{{$s2->content_4}}" class="form-control" placeholder="Enlace">
                            </div>
                            <div class="form-group col-sm-12 col-md-2">
                                <button type="submit" class="btn w-100 btn-primary">Actualizar</button>
                            </div>
                            <div class="col-sm-12">
                                <div class="row image-delete" style="min-height: 120px;">
                                    @isset($s2->image)
                                        <div class="form-group col-sm-12 col-md-2 position-relative bg-dark d-flex justify-content-center align-items-center">
                                            <button class="btn btn-danger image rounded-circle far fa-trash-alt position-absolute" 
                                            data-url="{{ route('content.destroy-image', ['id'=> $s2->id, 'reg' => 'image']) }}" 
                                            data-campo="image"
                                            style="top: -10px;
                                            right: 0;" data-url=""></button>
                                            <img src="{{asset($s2->image)}}" alt="" class="img-fluid alogo">
                                        </div>                            
                                    @endisset
                                    @isset($s2->content_3)
                                        <div class="form-group col-sm-12 col-md-3 position-relative">
                                            <button class="btn btn-danger image rounded-circle far fa-trash-alt position-absolute" 
                                            data-url="{{ route('content.destroy-image', ['id'=> $s2->id, 'reg' => 'content_3']) }}" 
                                            data-campo="content_3"
                                            style="top: -10px;
                                            right: 0;" data-url=""></button>
                                            <img src="{{asset($s2->content_3)}}" class="img-fluid aimage">
                                        </div>                  
                                    @endisset
                                </div>
                            </div>
                        </form>   
                    </div>       
                @endforeach
            </div>
        </div>
        <!-- /.card -->
    </div>    
@endif
@if($s3)
    <h4 class="my-4">Nosotros</h4>
    <form action="{{ route('home.content.update') }}" method="post" class="row mb-3" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$s3->id}}">
        <div class="form-group col-sm-12 col-md-8">
            <input type="text" name="content_1" value="{{$s3->content_1}}" class="form-control" placeholder="Título">
        </div>  
        <div class="form-group col-sm-12 col-md-4">
            <input type="file" name="image" class="form-control-file">
        </div> 
        <div class="form-group col-sm-12">
            <input type="text" name="content_2" value="{{$s3->content_2}}" class="form-control">
        </div>
        @isset($s3->image)
            <div class="col-sm-12">
                <div class="row image-delete" style="min-height: 120px;">
                    <div class="form-group col-sm-12 col-md-2 position-relative d-flex justify-content-center align-items-center">
                        <img src="{{asset($s3->image)}}" alt="" class="img-fluid alogo">
                    </div>                            
                </div>
            </div>
        @endisset
        <div class="form-group col-sm-12 col-md-2">
            <button type="submit" class="btn w-100 btn-primary">Actualizar</button>
        </div>
    </form>   
@endif
@if(isset($s4))
    <h4 class="my-4">Solicitar presupuesto</h4>
    <form action="{{ route('home.content.update') }}" method="post" class="row mb-3" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$s4->id}}">
        <div class="form-group col-sm-12 col-md-8">
            <input type="text" name="content_1" value="{{$s4->content_1}}" class="form-control" placeholder="Título">
        </div>  
        <div class="form-group col-sm-12 col-md-4">
            <input type="file" name="image" class="form-control-file">
        </div> 
        <div class="form-group col-sm-12">
            <input type="text" name="content_2" value="{{$s4->content_2}}" class="form-control">
        </div>
        @isset($s4->image)
        <div class="col-sm-12">
            <div class="row image-delete" style="min-height: 120px;">
                <div class="form-group col-sm-12 col-md-2 position-relative d-flex justify-content-center align-items-center">
                    <img src="{{asset($s4->image)}}" alt="" class="img-fluid alogo">
                </div>                            
            </div>
        </div>
        @endisset
        <div class="form-group col-sm-12 col-md-2">
            <button type="submit" class="btn w-100 btn-primary">Actualizar</button>
        </div>
    </form>   
@endif
@includeIf('administrator.home.modals.create')
@includeIf('administrator.home.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('home.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/home/index.js') }}"></script>
    <script>
        function imgDelete(e)
        {
            e.preventDefault()
            element = e.target
            if(element.classList.contains('image')){
                axios.delete(element.dataset.url)
                    .then(r => {
                        element.closest('div').remove()
                    })
                    .catch(e => console.error(new Error(e)))
            }
        }

        let sections = document.querySelectorAll('.image-delete')
        sections.forEach(element => {
            element.addEventListener('click', imgDelete)
        })
    </script>
@stop

