@vite(['resources/js/app.js', 'resources/css/app.css'])

<table>
    <thead>
        <tr>
            <th>Postulado</th>
            <th>Fecha</th>
            <th>Inscripción</th>
            <th>Asistencia</th>
            <th>Notificado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eventos_asistencia as $eventos_asistencia)
            <tr>
                <td>{{ $eventos_asistencia->postulado->nombre }}</td>
                <td>{{ $eventos_asistencia->evento->fecha }}</td>
                <td>{{ $eventos_asistencia->inscripcion }}</td>
                <td>{{ $eventos_asistencia->asistencia }}</td>
                <td>{{ $eventos_asistencia->notificado }}</td>
                <td>
                    <form action="{{ route('eventsController.destroy', $eventos_asistencia->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>