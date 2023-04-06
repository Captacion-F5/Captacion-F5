@extends('layouts.app')

@section('content')
    <h1>Editar Bootcamp</h1>

    <form action="{{ route('bootcamps.update', $bootcamp->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="escuela_id">
                Escuela
            </label>
            <select name="escuela_id" id="escuela_id" class="form-select block w-full mt-1">
                @foreach ($escuelas as $escuela)
                    <option value="{{ $escuela->id }}" @if ($bootcamp->escuela_id == $escuela->id) selected @endif>
                        {{ $escuela->nombre }}</option>
                @endforeach
            </select>
        </div>
        <input type="text" name="nombre" id="nombre"
            class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ $bootcamp->nombre }}">
        @error('nombre')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar Cambios
        </button>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input type="text" name="nombre" id="nombre"
                class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ $bootcamp->nombre }}">
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar Cambios
        </button>
    </form>
@endsection
