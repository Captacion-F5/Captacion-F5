@extends('adminlte::page')

@section('title', 'Detalle Bootcamp')

@section('content_header')
    <h1>Detalle Bootcamp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="id" value="{{ $bootcamp->id }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $bootcamp->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="start_date" class="col-sm-2 col-form-label">Fecha de inicio</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="start_date" value="{{ $bootcamp->start_date }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <a href="{{ route('bootcamps.edit', $bootcamp->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar el bootcamp?')">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


{{-- @extends('layouts.app')

@section('content')
  <h1>{{ $bootcamp->nombre }}</h1>

  <p><strong>Escuela:</strong> {{ $bootcamp->escuela->nombre }}</p>

  <a href="{{ route('bootcamps.edit', $bootcamp->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
    Editar
  </a>

  <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
      Eliminar
    </button>
  </form>
@endsection --}}
