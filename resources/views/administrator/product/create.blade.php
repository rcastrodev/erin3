@extends('adminlte::page')
@section('title', 'Crear producto')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Crear producto</h1>
        <a href="{{ route('product.content') }}" class="btn btn-sm btn-primary">ver productos</a>
    </div>
@stop
@section('content')
<div class="row">
    @includeIf('administrator.partials.mensaje-exitoso')
    @includeIf('administrator.partials.mensaje-error')
</div>
<div class="card card-primary">
    <div class="card-header"></div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('product.content.store') }}" method="post" enctype="multipart/form-data">
        <div class="card-body row">
            @csrf
            <div class="form-group col-sm-12 col-md-6">
                <label for="">Nombre del producto</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nombre del producto">
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="">Categoría</label>
                <select name="category_id" class="form-control select2">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="">Palabras claves</label>
                <input type="text" name="keywords" value="{{old('keywords')}}" class="form-control" placeholder="Palabras claves">
            </div> 
            <div class="form-group col-sm-12 col-md-4">
                <label>Ficha técnica</label>
                <input type="file" name="data_sheet" class="form-control-file">
            </div>   
            <div class="form-group col-sm-12">
                <label for="">Descripción</label>
                <textarea name="description" class="form-control ckeditor" cols="30" rows="2">{{old('description')}}</textarea>
            </div>      
            @for ($i = 1; $i <= 3; $i++)
                <div class="form-group col-sm-12 col-md-4">
                    <label for="image{{$i}}">imagen {{$i}}</label>
                    <input type="file" name="images[]" class="form-control-file" id="image{{$i}}">
                </div>           
            @endfor
            <div class="form-group col-sm-12 mt-4">
                <label for="">Aplicaciones</label>
                <select name="applications[]" class="select2 form-control" multiple="multiple">
                    @foreach ($applications as $app)
                        <option value="{{$app->id}}">{{$app->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="">Marcas</label>
                <select name="brands[]" class="select2 form-control" multiple="multiple">
                    @foreach ($brands as $b)
                        <option value="{{$b->id}}">{{$b->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="">Video 1</label>
                <input type="text" name="extra1" value="{{old('extra1')}}" class="form-control" placeholder="Video 1">
            </div>
            <div class="form-group col-sm-12">
                <label for="">Video 2</label>
                <input type="text" name="extra2" value="{{old('extra2')}}" class="form-control" placeholder="Video 2">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>

@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $('document').ready(function(){
            $('.select2').select2()
        })
    </script>
@stop

