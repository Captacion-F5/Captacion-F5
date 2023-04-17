@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


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
@vite(['resources/js/app.js', 'resources/css/app.css'])
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="px- py-2 text-xs text-white uppercase bg-naranja dark:bg-naranja-700 dark:text-gray-400">
        <tr class="">
            
            <th scope="col" class="px-6 py-4">
                Aplicante
            </th>
            <th scope="col" class="px-6 py-4">
                Teléfono
            </th>
            <th scope="col" class="px-6 py-4">
                Ejercicios > 50%
            </th>
            <th scope="col" class="px-6 py-4">
                RIC
            </th>
            <th scope="col" class="px-6 py-4">
                JPA
            </th>
            <th scope="col" class="px-6 py-4">
                TPB
            </th>
            <th scope="col" class="px-6 py-4">
                TF5
            </th>
            <th scope="col" class="px-6 py-4">
                Estatus
            </th>
            <th scope="col" class="px-6 py-4">
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bootcamp->postulado as $postulado)
        <tr class="hover:bg-orange-200 ">
            <td  class="px-4 py-2 font-medium text-gray-900  whitespace-nowrap">
                {{$postulado->nombre}}
            </td>
            
            <td class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                {{ $postulado->telefono }}
            </td>
            <td class="px-5 py-4">
                <span
                    class="inline-block rounded-full text-center px-2 py-1 font-semibold {{ $postulado->ejercicios ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                    {{ $postulado->ejercicios ? 'Si' : 'No' }}
                </span>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="px-3 py-4">
                <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja  dark:border-gray-600">
                <label for="checkbox-all-search" class="sr-only">checkbox</label>
            </td>
            <td class="py-4">
                    <span class="inline-block rounded-full text-center px-2 py-1 font-semibold
                    {{ $postulado->estado === 'seleccionado' ? 'bg-green-300 text-white' : ($postulado->estado === 'descartado' ? 'bg-red-400 text-white' : 'bg-blue-300 text-white')}}">
                        {{ $postulado->estado === 'seleccionado' ? 'seleccionado' : ($postulado->estado === 'descartado' ? 'descartado' : 'en proceso')}}
                    </span>
            </td>
            <td class="">
                <div class="flex">
                    <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </div>
                    <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
</div>
</div> 
@stop





