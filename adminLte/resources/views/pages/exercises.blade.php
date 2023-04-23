@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)
use App\Http\Controllers\BootcampController;


@section('content')
<div class="flex justify-between">
    <x-atoms.searchbar></x-atoms.searchbar>
    <div class="mb-4 align-middle mt-6">
        <a href="{{ route('postulado', ['ejercicios' => true]) }}">Ejercicios SI</a>
        <a href="{{ route('postulado', ['ejercicios' => false]) }}">Ejercicios NO</a>
    </div>
</div>
    <div class="flex m-6">
    <x-general-header-buttons :bootcamp="$bootcamp" :exercises="$exercises"></x-general-header-buttons>
    @foreach ($event as $evento)
    <a href="{{ route('eventos.show', $evento->id) }}">
    <x-section-button class="">
        {{ $evento->nombre }}
    </x-section-button>
    @endforeach
    </a>
</div>

    <x-tables.exercices-table :postulados="$postulado">
    </x-tables.exercices-table>


@stop





