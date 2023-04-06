
@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)


@section('content')
    <h2 class="text-naranja text-lg mt-2">Vista general de los procesos de selección.</h2>
    <br>
    <x-general-table></x-general-table>
    <br>
    <x-panel class="ml-3"></x-panel>
    <br>
    <div class="flex flex-row">
        <x-donut ></x-donut>
        <x-donut-genero></x-donut-genero>
        <x-stick-chart></x-stick-chart>
    </div>


@stop





