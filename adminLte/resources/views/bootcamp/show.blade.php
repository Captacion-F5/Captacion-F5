@extends('layouts.app')

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
@endsection
