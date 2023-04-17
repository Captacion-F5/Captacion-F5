@extends('adminlte::page')
@vite(['resources/js/app.js','resources/css/app.css'])
@section('content_header')
<br>
@stop

@section('content')
    <div class="row m-auto">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header m-auto">
                    <h3 class="box-title">Todas las Escuelas</h3>
                    <div class="box-tools">
                        <a href="{{ route('school.create') }}" class="btn btn-success">Añadir Escuela</a>
                    </div>
                </div>
                <br>
                <div class="box-body m-auto">
                    <table class="table table-bordered ">
                        <thead class=" bg-naranja text-white ">
                            <tr>
                                <th>Nombre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schools as $school)
                                <tr>
                                    <td>{{ $school->name }}</td>
                                    <td>
                                        <a href="{{ route('school.edit', $school->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('school.destroy', $school->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
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
@stop



  {{-- <h1>Lista Escuelas</h1>

  <a href="{{ route('school.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Añadir Escuela
  </a>
  <div class="flex justify-center items-center min-h-screen">
  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Nombre</th>
      </tr>
    </thead>
    <tbody>
      @foreach($schools as $school)
        <tr>
          <td class="border px-4 py-2">{{ $school->id }}</td>
          <td class="border px-4 py-2">{{ $school->nombre }}</td>
          <td class="border px-4 py-2">
            <a href="{{ route('school.show', $school->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
              Ver
            </a>
            <a href="{{ route('school.edit', $school->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
              Editar
            </a>
            <form action="{{ route('school.destroy', $school->id) }}" method="POST" style="display: inline;">
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
  </div>
 --}}
