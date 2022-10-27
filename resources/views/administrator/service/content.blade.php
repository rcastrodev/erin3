@extends('adminlte::page')
@section('title', 'Servicios')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Servicios</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear Servicio</button>
    </div>
@stop
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Contenido</th>
                    <th>Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@includeIf('administrator.service.modals.create')
@includeIf('administrator.service.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('service.content')}}">
    <meta name="content_find" content="{{route('service.content.find')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        document.querySelector('.create').addEventListener('click', function(){
            document.querySelector('.content1-create').innerHTML = CKEDITOR.instances['content1-create'].getData()
        })
    </script>
    <script>
        let btnUpdate = document.querySelector('.update')
        let content1 = document.getElementById('content1')
        btnUpdate.addEventListener('click', function(){
            content1.innerHTML = CKEDITOR.instances['content1'].getData()
        })
    </script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/service/index.js') }}"></script>
    <script>
        document.querySelector('.create').addEventListener('click', function(){
            setTimeout(() => {
                document.querySelector('.content1-create').innerHTML = null
                CKEDITOR.instances['content1-create'].setData('')
            }, 4000);
        })
    </script>
@stop

