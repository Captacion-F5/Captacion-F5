@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('content_header')
    <h1>General</h1>
@stop
{{-- use App\Http\Controllers\BootcampController; --}}

@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>
<div class="ml-3">
        @include('/components/atoms/panel')
    </div>
<div class="flex m-6">
    <x-general-header-buttons :bootcamp="$bootcamp"></x-general-header-buttons>
    @foreach ($event as $evento)
    <a href="{{ route('eventos.show', $evento->id) }}">
    <x-section-button class="">
        {{ $evento->nombre }}
    </x-section-button>
    @endforeach
    </a>
</div>
    <div class="flex flex-row">
        @include('/components/grafics/genre')
        @include('/components/grafics/exer')
        @include('/components/grafics/even')
    </div>

        <x-atoms.searchbar></x-atoms.searchbar>
    </div>
    @include('/components/tables/bootcamp-table')


</div>
@stop





