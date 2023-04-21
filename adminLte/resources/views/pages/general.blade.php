@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>
    <br>
    <div class="ml-3">
        @include('/components/atoms/panel')
    </div>

    {{-- <x-atoms.panel></x-atoms.panel> --}}
    <br>
    <div class="flex flex-row">
        @include('/components/grafics/genre')
        @include('/components/grafics/exer')
        @include('/components/grafics/even')
    </div>
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
    </div>
    @include('/components/tables/bootcamp-table')


</div>
@stop





