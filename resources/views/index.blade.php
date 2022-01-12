@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Listado de sala de juntas.</h1>
@stop

@section('content')
@if ($boardrooms->count())
    <div class="card">
        <div class="card-body">
            <table @class([
                'table',
                'table-striped'
            ])> 
                <thead>
                    <th></th>
                    <th>ID</th>
                    <th>Nombre</th>
                </thead>
                <tbody>
                    @foreach ($boardrooms as $boardroom)
                    <tr>
                        @if (!$boardroom->status)  
                        <td><span class="badge bg-success">Disponible</span></td>
                        @else 
                        <td><span class="badge bg-danger">Ocupada</span></td>
                        @endif
                        <td>{{$boardroom->id}}</td>
                        <td>{{$boardroom->name}}</td>
                        <td>
                            @if (!$boardroom->status) 
                            <a class="btn btn-success btn-sm" href="#">Reservar</a>
                            @else
                            <a class="btn btn-secondary btn-sm" href="#">Entrada</a>
                            @endif
                        </td>
                        <td>
                            @if ($boardroom->status) 
                            <a class="btn btn-danger btn-sm" href="#">Liberar</a>
                            @else
                            <a class="btn btn-secondary btn-sm" href="#">Liberar</a>
                            @endif
                        </td>
                        <td> <a class="btn btn-primary btn-sm" href="{{route('boardroom.edit', $boardroom->id)}}">Editar</a> </td>
                        <td> <form action="{{route('boardroom.destroy', $boardroom->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
    <div class="card-footer">
        {{$boardrooms->links()}}
    </div>
    @else
        <div class="card">
            <strong>No Existen Registros</strong>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
