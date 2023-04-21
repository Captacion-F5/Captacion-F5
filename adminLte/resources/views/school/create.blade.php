@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Crear Escuela')
@section('content_header')
    <h1>Crear nueva escuela</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('school.store') }}" method="POST" class="max-w-lg mx-auto my-8">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nombre">
                        Nombre de la escuela
                    </label>
                    <input type="text" name="name" id="nombre"
                        class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" action="{{ route('school.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Añadir
                </button>
            </form>
        </div>
    </div>
@endsection
