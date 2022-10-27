@extends('adminlte::page')
@section('title', 'categorías')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Categorías</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear categoría</button>
    </div>
@stop
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<form action="{{ route('content.hero-update') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$heroProduct->id}}">
    <div class="row">
        <div class="form-group col-sm-12 col-md-5">
            <input type="text" name="content_1" value="{{$heroProduct->content_1}}" placeholder="Título de página" class="form-control">
        </div>
        <div class="form-group col-sm-12 col-md-5">
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group col-sm-12 col-md-2">
            <button type="submit" class="btn btn-sm btn-primary w-100">Actualizar</button>
        </div>
    </div>
    <img src="{{ asset($heroProduct->image) }}" width="200" class="img-fluid" style="object-fit: contain;">
</form>
@includeIf('administrator.category.modals.create')
@includeIf('administrator.category.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('category.content')}}">
    <meta name="content_find" content="{{route('category.content.find')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/category/index.js') }}"></script>
@stop

