@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Crear nuevo evento')

@section('content_header')
    <h1>Crear nuevo evento</h1>
@stop
@section('content')

    <body class="p-auto font-sans text-gray-900 antialiased">
        <div class="w-full p-4 shadow-md overflow-hidden sm:rounded-lg text-black">
            <form method="POST" action="{{ route('postulado.store') }}">
                @csrf
                <div class="mt-4">
                    <x-input-label for="nombre" :value="__('Nombre y apellidos')" />
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                        required autofocus autocomplete="nombre" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="genero" :value="__('Género')" />
                    <select id="genero" class="block mt-1 w-full" name="genero" required>
                        <option value="hombre" @if (old('genero') === 'hombre') selected @endif>Hombre</option>
                        <option value="mujer" @if (old('genero') === 'mujer') selected @endif>Mujer</option>
                        <option value="no binario" @if (old('genero') === 'no binario') selected @endif>No binario</option>
                        <option value="prefiero no contestar" @if (old('genero') === 'prefiero no contestar') selected @endif>Prefiero no
                            contestar</option>
                    </select>
                    <x-input-error :messages="$errors->get('genero')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="mail" :value="__('Email')" />
                    <x-text-input id="mail" class="block mt-1 w-full" type="email" name="mail" :value="old('mail')"
                        required autocomplete="mail" />
                    <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                    <br>
                </div>
                <div>
                    <x-input-label for="telefono" :value="__('Teléfono de contacto')" />
                    <x-text-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')"
                        required autofocus autocomplete="telefono" />
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                    <br>
                </div>
                <div>
                    <x-input-label for="url_perfil" :value="__('Url perfil de Codecademy')" />
                    <x-text-input id="profile" class="block mt-1 w-full" type="text" name="url_perfil"
                        :value="old('url_perfil')" required autofocus autocomplete="url_perfil" />
                    <x-input-error :messages="$errors->get('url_perfil')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="bootcamp_nombre" :value="__('Bootcamp')" />
                    <select id="bootcamp_nombre" name="bootcamp_nombre" class="block mt-1 w-full rounded-lg " required
                        autofocus autocomplete="bootcamp_nombre">
                        @foreach ($bootcamps as $bootcamp)
                            <option value="{{ $bootcamp->nombre }}"
                                {{ old('bootcamp_nombre') == $bootcamp->nombre ? 'selected' : '' }}>{{ $bootcamp->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('bootcamp_nombre')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="flex justify-around mt-5">
                    <a class="text-lg" href="{{ route('postulado') }}">
                        <i class="fa fa-arrow-alt-circle-left text-naranja m-2 "></i>Todos los postulados
                    </a>
                    <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Crear postulado
                    </button>
                </div>
            </form>
        </div>
    </body>
@stop
