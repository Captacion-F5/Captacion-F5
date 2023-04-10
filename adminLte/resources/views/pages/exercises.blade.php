@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
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
        </div>
        <div class="mt-10">
            <x-event-button>
                {{ __('Evento')}}
            </x-event-button>
        </div>
    </div>
    <x-atoms.searchbar></x-atoms.searchbar>

    <x-tables.exercices-table class="">
    </x-tables.exercices-table>


@stop




