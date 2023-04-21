@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')

@section('title', 'Editar Bootcamp')

@section('content_header')
    <h1>Editar Bootcamp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bootcamps.update', $bootcamp) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre"
                        name="nombre" value="{{ $bootcamp->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inicio" class="form-label">Fecha de inicio</label>
                    <input type="date" class="form-control @error('inicio') is-invalid @enderror" id="inicio"
                        name="inicio" value="{{ $bootcamp->inicio }}">
                    @error('inicio')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="school_id" class="form-label">Escuela</label>
                    <select name="school_id" id="school_id" class="form-control w-1/3 @error('school_id') is-invalid @enderror">
                        @foreach ($schools as $school)
                            <option value="{{ $school->id }}" @if ($school->id == $bootcamp->school_id) selected @endif>
                                {{ $school->name }}</option>
                        @endforeach
                    </select>
                    @error('school_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="active" class="block text-gray-700 font-bold mb-2">Activo:</label>
                    <div class="flex">
                        <select id="active" name="active"
                            class="block appearance-none w-1/3 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="1" @if ($bootcamp->active == 1) selected @endif>Si</option>
                            <option value="0" @if ($bootcamp->active == 0) selected @endif>No</option>
                        </select>
                    </div>
                    @error('active')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-around">
                    <div>
                        <x-atoms.arrow-bootcamps>
                            </x-arrow-bootcamps>
                    </div>
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Actualizar bootcamp
                    </button>

                </div>

            </form>

        </div>
    </div>
@stop
