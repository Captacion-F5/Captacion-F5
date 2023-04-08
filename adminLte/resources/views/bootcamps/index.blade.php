@vite(['resources/js/app.js', 'resources/css/app.css'])

@extends('adminlte::page')

@section('title', 'Bootcamps')

@section('content_header')
    <h1>Bootcamps</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 m-auto">
                <div class="box">
                    <div class="box-header flex justify-between">
                        <h3 class="box-title">Todos los Bootcamps</h3>
                        <div class="box-tools">
                            <a href="{{ route('bootcamps.create') }}" class="btn btn-success">Create</a>
                        </div>
                    </div>
                    <div class="box-body m-auto">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="first-letter:">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha de inicio</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bootcamps as $bootcamp)
                                    <tr>
                                        <td>{{ $bootcamp->id }}</td>
                                        <td>{{ $bootcamp->nombre }}</td>
                                        <td>{{ $bootcamp->inicio }}</td>
                                        <td>
                                            <a href="{{ route('bootcamps.edit', $bootcamp->id) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('bootcamps.destroy', $bootcamp->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop



  {{-- <h1>Lista Bootcamps</h1>

  <a href="{{ route('bootcamps.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Crear Bootcamp
  </a>

  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Escuela</th>
        <th class="px-4 py-2">Nombre</th>
        <th class="px-4 py-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bootcamps as $bootcamp)
        <tr>
          <td class="border px-4 py-2">{{ $bootcamp->id }}</td>
          <td class="border px-4 py-2">{{ $bootcamp->school->nombre }}</td>
          <td class="border px-4 py-2">{{ $bootcamp->nombre }}</td>
          <td class="border px-4 py-2">
            <a href="{{ route('bootcamps.show', $bootcamp->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver
            </a>
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
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
 --}}
