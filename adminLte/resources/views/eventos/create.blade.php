@vite(['resources/js/app.js','resources/css/app.css'])
@extends('adminlte::page')
@section('title', 'Captación F5')


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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="bootcamp_id[]" id="{{ $id }}" value="{{ $id }}" @if(in_array($id, old('bootcamp_id', []))) checked @endif>
                            <label class="form-check-label" for="{{ $id }}">
                                {{ $nombre }}
                            </label>
                        </div>
                    @endforeach
                    </select>
                </div>
                <button type="submit" action="{{ route('eventos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Evento</button>
            </form>
    </div>
</div>
@endsection