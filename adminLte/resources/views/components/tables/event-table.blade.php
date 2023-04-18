@extends('adminlte::page')
@vite(['resources/js/app.js', 'resources/css/app.css'])


<table class="table table-bordered">
    <thead class="bg-naranja text-white">
        <tr>
            <th>Aplicante</th>
            <th>Invitación</th>
            <th>Fecha</th>
            <th>Inscripción</th>
            <th>Notificación</th>
            <th>Asistencia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr class="hover:bg-orange-200">
            <td>{{ $event->nombre }}</td>
            <td class="px-5 py-4 text-center">
                <select name="invitacion">
                    <option value="1" @if($event->invitacion == 1) selected @endif>Sí</option>
                    <option value="0" @if($event->invitacion == 0) selected @endif>No</option>
                </select>
            </td>
            <td class="text-center">{{ $event->fecha }}</td>
            <td class="text-center">
                <select name="inscripcion">
                    <option value="1" @if($event->inscripcion == 1) selected @endif>No</option>
                    <option value="0" @if($event->inscripcion == 0) selected @endif>Sí</option>
                </select>
            </td>
            <td class="px-5 py-4 text-center">
                <select name="notificado">
                    <option value="1" @if($event->notificado == 1) selected @endif>Sí</option>
                    <option value="0" @if($event->notificado == 0) selected @endif>No</option>
                </select>
            </td>
            <td class="px-3 py-4 text-center">
                <select name="asistencia">
                    <option value="1" style="color:red" @if($event->asistencia == 1) selected @endif>No</option>
                    <option value="0" style="color:green" @if($event->asistencia == 0) selected @endif>Sí</option>
                </select>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>