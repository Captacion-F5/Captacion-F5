@extends('adminlte::page')
@vite(['resources/js/app.js','resources/css/app.css'])
@section('content_header')
<br>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Eventos</h3>
                    <br>
                    <div class="box-tools">
                        <a href="{{ route('eventos.create') }}" class="btn btn-success">Añadir Evento</a>
                    </div>
                </div>
                <br>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Bootcamp</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                                <tr>
                                    <td>{{ $evento->id }}</td>
                                    <td>{{ $evento->nombre }}</td>
                                    <td>{{ $evento->bootcamp_id }}</td>
                                    <td>{{ $evento->fecha }}</td>
                                    <td>
                                        <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
