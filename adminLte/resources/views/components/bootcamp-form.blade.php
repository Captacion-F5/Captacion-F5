{{--
@extends('layouts.app')

@section('content')
  <h1>Crear Bootcamp</h1>

  <form action="" method="POST" class="w-full max-w-lg">
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label for="school" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Escuela</label>
        <select name="school" id="school" class="appearance-none block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          @foreach($schools as $school)
            <option value="{{ $school->id }}">{{ $school->nombre }}</option>
          @endforeach
        </select>
        @error('school')
          <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label for="nombre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="appearance-none block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        @error('nombre')
          <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Crear Bootcamp
        </button>
      </div>
    </div>
  </form>
@endsection --}} --}}
