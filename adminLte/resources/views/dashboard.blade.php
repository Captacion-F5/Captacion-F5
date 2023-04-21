
@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'CodeBusters')
@section('content_header')
    <h1 class="m-3">Bienvenida al proceso de selección: </h1>
@stop
@section('content')
    <x-tables.general-table :bootcamps="$bootcamps"></x-tables.general-table>
@stop





