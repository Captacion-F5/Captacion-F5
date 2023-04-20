@vite(['resources/js/app.js', 'resources/css/app.css'])

@extends('adminlte::page')

@section('title', 'Bootcamps')

@section('content_header')
    <div class="flex">
        <h1>Escuelas</h1>
        <div class="box-tools ml-5">
            <a href="{{ route('school.create') }}" class="inline-block bg-green-600 hover:bg-green-500  text-white font-bold py-1 px-3 rounded">
                Añadir
            </a>

        </div>
    </div>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 m-auto">
                <div class="box">
                    <div class="m-5 box-header flex justify-around">
                        <div class="box-body m-auto">
                            <table class="table table-bordered rounded-full w-full">
                                <thead class=" bg-naranja text-white ">
                                    <tr class="first-letter: p-10">
                                        <th>Nombre</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schools as $school)
                                        <tr class="text-lg">
                                            <td>{{ $school->name }}</td>
                                            <td>
                                                <a href="{{ route('school.edit', $school->id) }}"
                                                    class="inline-block text-orange-500 hover:text-orange-600 text-lg hover:text-xl shadow  py-1 px-1 border-2 border-orange-500 rounded">
                                                    Editar
                                                </a>

                                                <form action="{{ route('school.destroy', $school->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-block bg-orange-500 hover:bg-orange-600 shadow text-white py-1 px-2 rounded">
                                                        Eliminar
                                                    </button>
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
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-5" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

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
      @foreach ($schools as $school)
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
