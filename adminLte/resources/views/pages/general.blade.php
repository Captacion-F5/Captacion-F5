@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>

<div class="flex justify-between">
    <div class="m-10">
        <x-section-button class="m-auto">
            {{ __('General') }}
        </x-section-button>
        <x-section-button class="">
            {{ __('Ejercicios') }}
        </x-section-button>
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

<x-searchbar></x-searchbar>

    <x-process-table class="">
    </x-process-table>

@stop





