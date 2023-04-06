  @vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('adminlte::page')

@section('title', 'Create Bootcamp')

@section('content_header')
    <h1>Crear nuevo bootcamp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bootcamps.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="start_date">Fecha de inicio</label>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-naranja">Añadir</button>
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
