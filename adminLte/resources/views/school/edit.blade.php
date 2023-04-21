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
            </form>
            <div class="flex justify-around mt-5">
                <a class="text-lg" href="{{ route('school.index') }}">
                    <i class="fa fa-arrow-alt-circle-left text-naranja m-2 "></i>Todas las escuelas
                </a>
                <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                    Actualizar escuela
                </button>
            </div>
        </div>
    </div>
@stop


