@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)
{{-- @include('layouts.navigation')
<aside class="col-span-5 lg:col-span-2">
    @include('layouts.sidebarHome') 
</aside> --}}
@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>

<div class="flex justify-between">
    <div class="m-10">
        <a href="{{ url('/general') }}">
            <x-section-button class="m-auto">
                {{ __('General') }}
            </x-section-button>
        </a>
        <a href="{{ url('/exercises') }}">
            <x-section-button class="">
                {{ __('Ejercicios') }}
            </x-section-button>
        </a>
        <x-section-button class="">
            {{ __('RIC') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('JPA') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('TF5') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('TPB') }}
        </x-section-button>
        <a href="{{ url('/postulado') }}">
            <x-section-button class="">
                {{ __('Datos Postulantes') }}
            </x-section-button>
        </a>
    </div>
</div>

<x-atoms.searchbar></x-atoms.searchbar>
{{-- <x-tables.postulantes-table :postulados="$postulados" /> --}}
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="px- py-2 text-xs text-white uppercase bg-naranja dark:text-gray-400">
        <tr>
            <th scope="col" class="">Nombre</th>
            <th scope="col" class="">Genero</th>
            <th scope="col" class="">Correo Electrónico</th>
            <th scope="col" class="">Teléfono</th>
            <th scope="col" class="">URL de Perfil</th>
            <th scope="col" class="">Bootcamp</th>
            <th scope="col" class=""></th>
        </tr>
    </thead>
    <tbody>
        @foreach($postulados as $postulado)
            <tr class="hover:bg-orange-200  bg-gray-200">
                <td>{{ $postulado->nombre }}</td>
                <td>{{ $postulado->genero }}</td>
                <td>{{ $postulado->mail }}</td>
                <td>{{ $postulado->telefono }}</td>
                <td>{{ $postulado->url_perfil }}</td>
                <td>
                    @if(!empty($postulado->bootcamp))
                        @php
                            $nombres = [];
                            foreach($postulado->bootcamp as $bootcamp) {
                                if(!empty($bootcamp->nombre)) {
                                    $nombres = array_merge($nombres, explode(',', $bootcamp->nombre));
                                }
                            }
                            echo implode(', ', $nombres);
                        @endphp
                    @endif
                </td>
                <td class="">
                    <div class="flex">
                        <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                            <button class="" data-toggle="modal" data-target="#editarPostuladoModal">
                                <a href="{{ route('postulado.edit', ['id' => $postulado->id]) }}" class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <svg class="h-5 w-5 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                            <form action="{{ route('postulado.destroy', ['id' => $postulado->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Seguro que quieres borrar el postulante?')" class="focus:outline-none">
                                    <svg class="h-5 w-5 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  
                                        <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" />  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />  <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
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