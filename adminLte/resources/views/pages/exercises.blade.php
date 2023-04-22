@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)
use App\Http\Controllers\BootcampController;


@section('content')
    <x-atoms.searchbar></x-atoms.searchbar>
    <x-general-header-buttons :bootcamp="$bootcamp" :exercises="$exercises"></x-general-header-buttons>

    <x-tables.exercices-table>
    </x-tables.exercices-table>


@stop





