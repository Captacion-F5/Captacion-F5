@extends('adminlte::page')

@section('title', 'Editar Bootcamp')

@section('content_header')
    <h1>Editar Bootcamp</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bootcamps.update', $bootcamp->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="nombre" value="{{ $bootcamp->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inicio" class="form-label">Fecha de inicio</label>
                    <input type="date" class="form-control @error('inicio') is-invalid @enderror" id="inicio" name="inicio" value="{{ $bootcamp->inicio }}">
                    @error('inicio')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@stop


{{-- @extends('adminlte::page')

@section('title', 'Editar bootcamp')

@section('content_header')
    <h1>Editar bootcamp</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar bootcamp</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('bootcamps.update', $bootcamp->id) }}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca el nombre del bootcamp" value="{{ $bootcamp->name }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label for="start_date">Fecha de inicio</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $bootcamp->start_date }}" required>
                            @if ($errors->has('start_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href="{{ route('bootcamps.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop


{{-- @extends('layouts.app')

@section('content')
    <h1>Editar Bootcamp</h1>

    <form action="{{ route('bootcamps.update', $bootcamp->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="escuela_id">
                Escuela
            </label>
            <select name="escuela_id" id="escuela_id" class="form-select block w-full mt-1">
                @foreach ($escuelas as $escuela)
                    <option value="{{ $escuela->id }}" @if ($bootcamp->escuela_id == $escuela->id) selected @endif>
                        {{ $escuela->nombre }}</option>
                @endforeach
            </select>
        </div>
        <input type="text" name="nombre" id="nombre"
            class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ $bootcamp->nombre }}">
        @error('nombre')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar Cambios
        </button>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input type="text" name="nombre" id="nombre"
                class="form-input w-full @error('nombre') border-red-500 @enderror" value="{{ $bootcamp->nombre }}">
            @error('nombre')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar Cambios
        </button>
    </form>
@endsection --}}
