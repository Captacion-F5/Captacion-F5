@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('content_header')
    <h1>Editar Escuela</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('school.update', $school) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $school->nombre }}">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

               
                           
                <div class="flex justify-center">
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Actualizar Escuela
                    </button>
                </div>
            </form>
            <a href="{{ route('school.index') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white bg-naranja rounded-full mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>

                Ver Escuelas
            </a>
        </div>
    </div>
@stop


