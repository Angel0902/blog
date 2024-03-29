@extends('adminlte::page')

@section('title', 'Escritorio')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>        
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($tag,['route' => ['admin.tags.update',$tag],'method' => 'put']) !!}
                @include('admin.tags.partials.form')
                {!! Form::submit('Actualizar Etiqueta', ['class'=>'btn btn-primary']) !!}
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