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
                                        <td>
                                            <a href="{{ route('bootcamps.edit', $bootcamp->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST"
                                                style="display: inline-block;">
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

    {{-- <div class="container">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bootcamps as $bootcamp)
                                    <tr>
                                        <td>{{ $bootcamp->id }}</td>
                                        <td>{{ $bootcamp->nombre }}</td>
                                        <td>{{ $bootcamp->inicio }}</td>
                                        <td>{{ $bootcamp->school->name }}</td>
                                        <td>
                                            <a href="{{ route('bootcamps.edit', $bootcamp->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST"
                                                style="display: inline-block;">
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
    </div> --}}
@stop
