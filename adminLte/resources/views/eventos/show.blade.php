

@vite(['resources/js/app.js', 'resources/css/app.css'])
@extends('adminlte::page')
@section('content_header')
<h1 class="text-center bold">{{ $evento->nombre }}</h1>
@stop
@section('content')

        <x-tables.event-table></x-tables.event-table>

@stop

