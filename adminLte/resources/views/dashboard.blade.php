
@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)

{{-- @section('content_header')
    <h1>Proceso de selección</h1>
@stop --}}

@section('content')
    <p>Bienvenida a tu panel de administradora</p>
    <x-panel class="ml-3">
    </x-panel>
    {{-- <p>Bienvenida a tu panel de administradora</p> --}}

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
        <div class="m-10">
            <x-event-button>
            </x-event-button>
        </div>
    </div>
    <x-searchbar></x-searchbar>
    <x-general-table></x-general-table>
    <x-process-table class="">
    </x-process-table>

    <x-exercices-table class="">
    </x-exercices-table>

    {{-- <div>
        <x-profile-table class="w-100">
        </x-profile-table>
    </div> --}}

    <x-applicant-form></x-applicant-form>



   
    {{-- <div class="flex flex-row">
        <x-donut ></x-donut>
        <x-donut-genero></x-donut-genero>
        <x-stick-chart></x-stick-chart>
    </div> --}}
@stop





