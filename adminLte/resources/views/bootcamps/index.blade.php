@vite(['resources/js/app.js', 'resources/css/app.css'])

@extends('adminlte::page')

@section('title', 'Bootcamps')

@section('content_header')
    <h1>Bootcamps</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 m-auto">
                <div class="box">
                    <div class="m-5 box-header flex justify-between">
                        <h3 class="box-title">Todos los Bootcamps</h3>
                        <div class="box-tools">
                            <a href="{{ route('bootcamps.create') }}" class="btn btn-success">Añadir </a>
                        </div>
                    </div>
                    <div class="box-body m-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="first-letter:">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha de inicio</th>
                                    <th>Escuela</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bootcamps as $bootcamp)
                                    <tr>
                                        <td>{{ $bootcamp->id }}</td>
                                        <td>{{ $bootcamp->nombre }}</td>
                                        <td>{{ $bootcamp->inicio }}</td>
                                        <td>{{ $bootcamp->school->name ?? '' }}</td>
                                        <td> <span class="inline-block rounded-full text-center px-2 py-1 font-semibold {{ $bootcamp->active ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                            {{ $bootcamp->active ? 'Activo' : 'Inactivo' }}
                                        </span></td>
                                        <td>
                                            <div class="flex">
                                                <form method="POST" action="{{ route('bootcamps.destroy', $bootcamp->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('bootcamps.edit', $bootcamp->id) }}" class="btn btn-primary">
                                                        Editar
                                                    </a>

                                                    {{-- <a href="/bootcamps/{{$bootcamp->id}}/edit" class="btn btn-primary"><i class="bi bi-gear-fill"></i></a> --}}
                                                    <button type="submit"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>

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
