@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Crear nuevo evento')

@section('content_header')
    <h1>Crear nuevo evento</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
            <form action="{{ route('eventos.store') }}" method="POST" class="max-w-lg mx-auto my-8">
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

                        <option value="">Seleccione un Bootcamp</option>
                        @foreach($bootcamps as $id => $nombre)
                        <div>
                            <input type="checkbox" id="bootcamp_{{ $id }}" name="bootcamp_id[]" value="{{ $nombre }}" @if(in_array($nombre, old('bootcamp_id', []))) checked @endif>
                            <label for="bootcamp_{{ $id }}">{{ $nombre }}</label>
                        </div>
                    @endforeach
                    </select>
                </div>
                <div class="flex justify-around">
                    <a class="text-lg" href="{{ route('eventos.index') }}">
                        <i class="fa fa-calendar text-naranja m-2 "></i>Todos los eventos
                    </a>
                    <button type="submit" class="bg-green-600 hover:bg-green-400 text-white font-bold py-2 px-4 rounded">
                        Crear evento
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
