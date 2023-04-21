@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('title', 'Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto">
                <div class="box">
                    <div class="box-header flex justify-end">
                        <div class="box-tools">
                            <a href="{{ route('eventos.create') }}"
                                class="inline-block bg-green-600 hover:bg-green-500 text-lg border-2 border-green-700 text-white py-1 px-3 rounded">Añadir
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="box-body m-auto">
                        <table class="table table-bordered">
                            <thead class="bg-naranja text-white rounded">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Bootcamp</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td><a href="{{ route('eventos.show', $event->id) }}">{{ $event->nombre }}</a></td>
                                        <td>{{ $event->fecha }}</td>
                                        <td>{{ implode(', ', $event->bootcamp->pluck('nombre')->toArray()) }}</td>
                                        <td>
                                            <a href="{{ route('eventos.edit', $event->id) }}"
                                                class="inline-block bg-sky-600 text-white hover: text-lg hover:bg-sky-800 shadow  py-1 px-2 border-2 border-sky-900 rounded">
                                                Editar
                                            </a>
                                            <form action="{{ route('eventos.destroy', $event->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-block text-lg bg-orange-500 hover:bg-orange-600 shadow text-white py-1 px-2 border-2 border-orange-900 rounded">
                                                    Eliminar
                                                </button>
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
@stop
