@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)
use App\Http\Controllers\BootcampController;



@section('content')
<h2 class="text-naranja text-lg mt-2">Bienvenida a tu panel de administradora</h2>
    <br>
    <x-atoms.panel class="ml-3"></x-atoms.panel>
    
    <br>
    <x-general-header-buttons :bootcamp="$bootcamp"></x-general-header-buttons>
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





