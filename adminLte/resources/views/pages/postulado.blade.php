@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Postulados F5')
@section('content_header')
    <h1>Postulados</h1>
@stop

@section('content')
    <div class="box-header flex justify between">
        <x-atoms.searchbar></x-atoms.searchbar>
        {{-- <div class="box-tools ml-5">
            <a href="{{ route('aplicant-form.create') }}" class="inline-block bg-green-600 hover:bg-green-500 text-lg border-2 border-green-700 text-white py-1 px-3 rounded">Añadir </a>
        </div> --}}
    </div>

    <table class="w-full text-sm text-left">
        <thead class="bg-naranja text-xs text-white uppercase rounded-lg">
            <tr>
                <th scope="col" class="px-6 py-4">Nombre</th>
                <th scope="col" class="px-6 py-4">Género</th>
                <th scope="col" class="px-6 py-4">Correo Electrónico</th>
                <th scope="col" class="px-6 py-4">Teléfono</th>
                <th scope="col" class="px-6 py-4">URL de Perfil</th>
                <th scope="col" class="px-6 py-4">Bootcamp</th>
                <th scope="col" class="px-6 py-4"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postulados as $postulado)
                <tr class="bg-gray-200 hover:bg-orange-200">
                    <td class="px-4 py-2">{{ $postulado->nombre }}</td>
                    <td class="px-4 py-2">{{ $postulado->genero }}</td>
                    <td class="px-4 py-2">{{ $postulado->mail }}</td>
                    <td class="px-4 py-2">{{ $postulado->telefono }}</td>
                    <td class="px-4 py-2">{{ $postulado->url_perfil }}</td>
                    <td class="px-4 py-2">
                        @if (!empty($postulado->bootcamp))
                            @php
                                $nombres = [];
                                foreach ($postulado->bootcamp as $bootcamp) {
                                    if (!empty($bootcamp->nombre)) {
                                        $nombres = array_merge($nombres, explode(',', $bootcamp->nombre));
                                    }
                                }
                                echo implode(', ', $nombres);
                            @endphp
                        @endif
                    </td>

                    <td class="px-4 py-2">
                        <div class="flex">
                            <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <button class="" data-toggle="modal" data-target="#editarPostuladoModal">
                                    <a href="{{ route('postulado.edit', ['id' => $postulado->id]) }}"
                                        class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                </button>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                <form action="{{ route('postulado.destroy', ['id' => $postulado->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('¿Seguro que quieres borrar el postulante?')"
                                        class="focus:outline-none">
                                        <svg class="h-5 w-5 text-gray-400" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <line x1="4" y1="7" x2="20" y2="7" />
                                            <line x1="10" y1="11" x2="10" y2="17" />
                                            <line x1="14" y1="11" x2="14" y2="17" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
