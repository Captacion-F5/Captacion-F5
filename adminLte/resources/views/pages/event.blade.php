@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')

@section('content')
    <x-atoms.searchbar></x-atoms.searchbar>
    <x-tables.event-table></x-tables.event-table>
@stop





