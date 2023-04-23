@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('title', 'Editar postulante')

@section('content_header')
    <h1>Editar postulante</h1>
@stop

@section('content')
    <div class="modal-container bg-white m-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <form action="{{ route('postulado.update', ['id' => $postulado->id]) }}" method="POST" class="w-full">
                @method('PUT')
                @csrf
                <input type="text" name="nombre" value="{{ $postulado->nombre }}" required
                    class="w-full px-4 py-2 mb-4 rounded">
                <select name="genero" required class="w-full px-4 py-2 mb-4 rounded">
                    <option value="hombre" @if ($postulado->genero === 'hombre') selected @endif>Hombre</option>
                    <option value="mujer" @if ($postulado->genero === 'mujer') selected @endif>Mujer</option>
                    <option value="no binario" @if ($postulado->genero === 'no binario') selected @endif>No binario</option>
                    <option value="prefiero no contestar" @if ($postulado->genero === 'prefiero no contestar') selected @endif>Prefiero no
                        contestar</option>
                </select>
                <input type="email" name="mail" value="{{ $postulado->mail }}" required
                    class="w-full px-4 py-2 mb-4 rounded">
                <input type="tel" name="telefono" value="{{ $postulado->telefono }}" required
                    class="w-full px-4 py-2 mb-4 rounded">
                <input type="url" name="url_perfil" value="{{ $postulado->url_perfil }}" required
                    class="w-full px-4 py-2 mb-4 rounded">
                <label for="bootcamp_nombre" class="block mb-2 font-bold">Nombre del bootcamp:</label>
                <input type="text" name="bootcamp_nombre"
                    value="{{ implode(', ', $postulado->bootcamp->pluck('nombre')->toArray()) }}" required
                    class="w-full px-4 py-2 mb-4 rounded">
                <div class="flex justify-around">
                    <a class="text-lg" href="{{ route('postulado') }}">
                        <i class="fa fa-users text-naranja m-2 "></i>Ver postulantes
                    </a>
                    <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Actualizar postulante
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop
