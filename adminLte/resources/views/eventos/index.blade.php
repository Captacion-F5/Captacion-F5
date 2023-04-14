@extends('adminlte::page')
@vite(['resources/js/app.js','resources/css/app.css'])

@section('content')
<div class="container">
  <div class= "card mx-auto">
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
                                <th>Fecha</th>
                                <th>Bootcamp</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->nombre }}</td>
                                    <td>{{ $event->fecha }}</td>
                                    <td>{{ implode(', ', $event->bootcamp->pluck('nombre')->toArray()) }}</td>
                                    <td>
                                        <a href="{{ route('eventos.edit', $event->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('eventos.destroy', $event->id) }}" method="POST" style="display: inline-block;">
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
  </div>
</div>
@stop