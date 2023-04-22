@vite(['resources/js/app.js', 'resources/css/app.css'])

@extends('adminlte::page')

@section('title', 'Bootcamps')

@section('content_header')
    <div class="flex mt-2">
        <h1>Bootcamps</h1>
        <div class="flex space-x-56">
        <div class="box-tools ml-5">
            <a href="{{ route('bootcamps.create') }}"
                class="inline-block bg-green-600 hover:bg-green-500 text-lg border-2 border-green-700 text-white py-1 px-3 rounded">Añadir
            </a>
        </div>
        <div>
            <a class="m-3 text-naranja" href="{{ route('bootcamps.index', ['active' => 1]) }}">Abiertos</a>
            <a class="m-3 text-naranja" href="{{ route('bootcamps.index', ['active' => 0]) }}">Cerrados</a>
        </div>
    </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 m-auto">
                <div class="fixed right-0 top-12 mt-10 mr-8 z-50">
                    @if (session('success'))
                        <div
                            class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-md animate-slideout">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                </div>
                <div class="box">
                    <x-atoms.search-bootcamp></x-atoms.search-bootcamp>
                    <div class="box-body m-auto">
                        <table class="table table-bordered rounded-full">
                            <thead class=" bg-naranja text-white ">
                                <tr class="first-letter:">
                                    <th>Nombre</th>
                                    <th>Fecha de inicio</th>
                                    <th>Escuela</th>
                                    <th>Proceso</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bootcamps as $bootcamp)
                                    <tr>
                                        <td><a href="{{ route('general', $bootcamp->id) }}">{{ $bootcamp->nombre }}</a></td>
                                        <td>{{ $bootcamp->inicio }}</td>
                                        <td>{{ $bootcamp->school ? $bootcamp->school->name : '' }}</td>

                                        <td class="text-center"> <span
                                                class="inline-block rounded-full text-center px-2 py-1 font-semibold {{ $bootcamp->active ? ' text-green font-bold' : 'text-red font-bold' }}">
                                                {{ $bootcamp->active ? 'Abierto' : 'Cerrado' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('bootcamps.edit', $bootcamp->id) }}"
                                                class="inline-block bg-sky-600 text-white hover: text-lg hover:bg-sky-800 shadow  py-1 px-2 border-2 border-sky-900 rounded">
                                                Editar
                                            </a>

                                            <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-block text-lg bg-orange-500 hover:bg-orange-600 shadow text-white py-1 px-2 border-2 border-orange-900 rounded"
                                                    onclick="return confirm('¿Está seguro que desea eliminar este bootcamp?')">
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
