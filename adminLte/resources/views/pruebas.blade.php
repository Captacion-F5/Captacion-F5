@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)
 
<h1>Eventos</h1>

<ul>
    @foreach($events as $event)
        <li>{{ $event->nombre }}</li>
    @endforeach
</ul>