@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')
@section('plugins.Sweetalert2', true)

@section('content')
<form action="{{ route('eventos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre del Evento</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha del Evento</label>
        <input type="date" name="fecha" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="bootcamp_id">Bootcamp</label>
        <select name="bootcamp_id" class="form-control">
            <option value="">Seleccione un Bootcamp</option>
            @foreach($bootcamps as $id => $nombre)
                <option value="{{ $id }}">{{ $nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear Evento</button>
</form>
@endsection