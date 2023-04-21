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
                <div class="flex justify-around">
                    <a class="text-lg" href="{{ route('school.index') }}">
                        <i class="fa fa-arrow-alt-circle-left text-naranja m-2 "></i>Todas las escuelas
                    </a>
                    <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Crear escuela
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
