{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('adminlte::page')

@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)

{{-- @section('content_header')
    <h1>Proceso de selección</h1>
@stop --}}

@section('content')
    {{-- <p>Bienvenida a tu panel de administradora</p> --}}
    <x-section-button class="ml-3">
        {{ __('General') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('Ejercicios') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('RIC') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('JPA') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('TF5') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('TPB') }}
    </x-section-button>
    <x-section-button class="ml-3">
        {{ __('TPB') }}
    </x-section-button>
    <x-event-button class="ml-3">
        {{ __('+ evento') }}
    </x-event-button>
    <div>
        <x-profile-table class="w-100">
        </x-profile-table>
    </div>
    {{-- <div>
        <x-process-table class="w-100">
        </x-process-table>
    </div> --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
