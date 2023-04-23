@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')
@section('content_header')
    <h1 class="text-center w-1/2">{{ $evento->nombre }}</h1>
@stop
@section('content')

    <x-tables.event-table></x-tables.event-table>
    <a class="text-lg" href="{{ route('eventos.index') }}">
        <i class="fa fa-calendar text-naranja m-2 "></i>Ver eventos
    </a>
@stop
