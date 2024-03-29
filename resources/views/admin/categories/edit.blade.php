@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>        
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category,['route' => ['admin.categories.update',$category],'method' => 'put'])!!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Ingrese el nombre de la categoria']) !!}

                    @error('name')
                        <span class="text">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug',null,['class'=>'form-control','placeholder' => 'Ingrese el slug de la categoria','readonly' => 'readonly']) !!}

                    @error('slug')
                        <span class="text">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Editar categoria', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringtoslug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'blur',
                getPut:'#slug',
                space: '-'
            });
        });
    </script>
@stop