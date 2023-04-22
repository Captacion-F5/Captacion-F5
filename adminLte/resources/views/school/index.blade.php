@vite(['resources/js/app.js', 'resources/css/app.css'])

@extends('adminlte::page')

@section('title', 'Escuelas')

@section('content_header')

    <h1>Escuelas</h1>


@stop

@section('content')
    <div class="box-tools ml-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 m-auto">
                    <div class="ml-5 justify-end">
                        <a href="{{ route('school.create') }}"
                            class=" inline-block bg-green-600 hover:bg-green-500 text-lg border-2 border-green-700 text-white py-1 px-3 rounded">
                            Añadir
                        </a>
                    </div>
                    <div class="box">
                        <div class="m-5 box-header flex justify-around">
                            <div class="box-body m-auto">
                                <table class="table table-bordered rounded-full w-full">
                                    <thead class=" bg-naranja text-white ">
                                        <tr class="first-letter: p-10">
                                            <th>Nombre</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schools as $school)
                                            <tr class="text-lg">
                                                <td>{{ $school->name }}</td>
                                                <td>
                                                    <a href="{{ route('school.edit', $school->id) }}"
                                                        class="inline-block bg-sky-600 text-white hover: text-lg hover:bg-sky-800 shadow  py-1 px-2 border-2 border-sky-900 rounded">
                                                        Editar
                                                    </a>

                                                    <form action="{{ route('school.destroy', $school->id) }}" method="POST"
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
                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-5" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
