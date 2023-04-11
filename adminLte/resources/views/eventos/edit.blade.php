@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('title', 'Editar Bootcamp')

@section('content_header')
    <h1>Editar Evento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('eventos.update', $evento) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="nombre" value="{{ $evento->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha del evento</label>
                    <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fecha" value="{{ $evento->inicio }}">
                    @error('fecha')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bootcamp_id" class="form-label">Bootcamp</label>
                    <input type="text" class="form-control @error('bootcamp_id') is-invalid @enderror" id="bootcamp_id" name="bootcamp_id" value="{{ $evento->bootcamp_id }}">
                    @error('bootcamp_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Actualizar evento
                    </button>
                </div>
            </form>
            <a href="{{ route('eventos.index') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white bg-naranja rounded-full mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>

                Ver Eventos
            </a>
        </div>
    </div>
@stop

