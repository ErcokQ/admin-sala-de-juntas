@extends('adminlte::page')

@section('title', 'Crear Visitante')

@section('content_header')
    <h1>Crear Visitante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>['boardroom.update', $boardroom->id], 'method' => 'put','class'=>'row']) !!}
            <div class="form-group col">
                {!! Form::label('name','Nombre') !!}
                {!! Form::text('name', $boardroom->name, ['class' =>'form-control','placeholder'=>'Nombre de Sala']) !!}
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="w-100"></div>
            <div>
                {!! Form::submit('Actualizar sala', ['class'=>'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
     
@stop