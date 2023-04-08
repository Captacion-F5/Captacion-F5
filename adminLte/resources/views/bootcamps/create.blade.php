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
                <div class="flex justify-center">
                    <button type="submit" class="bg-naranja hover:bg-melocoton text-white font-bold py-2 px-4 rounded">
                        Crear bootcamp
                    </button>
                </div>
            </form>

        </div>
    </div>
@stop


{{-- @extends('layouts.app')

@section('content')
  <h1>Crear Bootcamp</h1>

  <form action="{{ route('bootcamps.store') }}" method="POST">
    @csrf

    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="escuela_id">
        Escuela
      </label>
      <select name="escuela_id" id="escuela_id" class="form-select block w-full mt-1">
        @foreach($escuelas as $escuela)
          <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 font-bold mb-2" for="nombre">
        Nombre
      </label>
      <input type="text" name="nombre" id="nombre" class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ old('nombre') }}">
      @error('nombre')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Crear Bootcamp
    </button>
  </form>
@endsection --}}
