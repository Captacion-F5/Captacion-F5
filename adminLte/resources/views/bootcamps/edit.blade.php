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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="nombre" value="{{ $bootcamp->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inicio" class="form-label">Fecha de inicio</label>
                    <input type="date" class="form-control @error('inicio') is-invalid @enderror" id="inicio" name="inicio" value="{{ $bootcamp->inicio }}">
                    @error('inicio')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="school_id" class="form-label">Escuela</label>
                    <input type="text" class="form-control @error('school_id') is-invalid @enderror" id="school_id" name="school_id" value="{{ $bootcamp->school_id }}">
                    @error('school_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="mb-4">
                    <label for="school_id" class="block text-gray-700 font-bold mb-2">Escuela:</label>
                    <select id="school_id" name="school_id" class="form-select w-full @error('school_id') border-red-500 @enderror" required>
                        <option value="Selecciona">Seleccione una escuela</option>
                        @foreach($schools as $school)
                            <option value="{{ $school->id }}" {{ old('school_id') == $school->id ? 'selected' : '' }}>{{ $school->name }}</option>
                        @endforeach
                    </select>
                    @error('school_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> --}}


                {{-- <div class="mb-4">
                    <label for="school_id" class="block text-gray-700 font-bold mb-2">Escuela:</label>
                    <select id="school_id" name="school_id" class="form-select w-full @error('school_id') border-red-500 @enderror" required>
                        <option value="Selecciona">Seleccione una escuela</option>
                        @foreach($schools as $school)
                            <option value="{{ $school->id }}" {{ old('school_id') == $school->id ? 'selected' : '' }}>{{ $school->name }}</option>
                        @endforeach
                    </select>
                    @error('school_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> --}}
                <div class="flex justify-center">
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Actualizar bootcamp
                    </button>
                </div>
            </form>
            <a href="{{ route('bootcamps.index') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white bg-naranja rounded-full mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>

                Ver bootcamps
            </a>
        </div>
    </div>
@stop


