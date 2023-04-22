@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('title', 'Editar Bootcamp')

@section('content_header')
    <h1>Editar Evento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control text-gray-800 @error('name') is-invalid @enderror" id="nombre"
                        name="nombre" value="{{ $evento->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha del evento</label>
                    <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha"
                        name="fecha" value="{{ $evento->fecha }}">
                    @error('fecha')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bootcamp_id" class="form-label">Bootcamp</label>
                    @foreach ($bootcamp as $id => $nombre)
                        <div class="">
                            <input type="checkbox" id="bootcamp_{{ $id }}" name="bootcamp_id[]"
                                value="{{ $nombre }}" @if (in_array($nombre, old('bootcamp_id', []))) checked @endif>
                            <label for="bootcamp_{{ $id }}">{{ $nombre }}</label>
                        </div>
                    @endforeach
                    @error('bootcamp_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-around">
                     <a class="text-lg" href="{{ route('eventos.index') }}">
                        <i class="fa fa-calendar text-naranja m-2 "></i>Ver eventos
                    </a>
                    <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Actualizar evento
                    </button>
                </div>
            </form>

        </div>
    </div>
@stop
