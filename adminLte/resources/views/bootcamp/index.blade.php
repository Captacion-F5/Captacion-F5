
  <h1>Lista Bootcamps</h1>

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

