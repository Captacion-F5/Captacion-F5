
@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
    <h2 class="text-naranja text-lg mt-2">Vista general de los procesos de selección.</h2>
    <br>
    <x-tables.general-table></x-tables.general-table>
    <br>
    <x-atoms.panel class="ml-3"></x-atoms.panel>
    <br>
    
    <div class="flex flex-row">
        <x-molecules.donut></x-molecules.donut>
        <x-molecules.donut-genero></x-molecules.donut-genero>
        <x-molecules.stick-chart></x-molecules.stick-chart>
    </div>


@stop





