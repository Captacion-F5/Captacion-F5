  @vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('adminlte::page')

@section('title', 'Create Bootcamp')

@section('content_header')
    <h1>Crear nuevo bootcamp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('bootcamps.store') }}" class="max-w-lg mx-auto my-8">
                @csrf
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-input w-full @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="inicio" class="block text-gray-700 font-bold mb-2">Fecha de inicio:</label>
                    <input type="date" id="inicio" name="inicio" class="form-input w-full @error('inicio') border-red-500 @enderror" value="{{ old('start_date') }}" required>
                    @error('inicio')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
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
                </div>
                <div class="mb-4">
                    <label for="active" class="block text-gray-700 font-bold mb-2">Estado:</label>
                    <div class="flex">
                        <label for="active">Activo:</label>
                        <input type="checkbox" id="active" name="active" value="1" @if(old('active')) checked @endif>
                        {{-- <label class="inline-flex items-center mr-4">
                            <input type="radio" name="active" value="1" class="form-radio" checked>
                            <span class="ml-2">Activo</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="active" value="0" class="form-radio">
                            <span class="ml-2">Inactivo</span>
                        </label> --}}
                    </div>
                    @error('active')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Crear bootcamp
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
