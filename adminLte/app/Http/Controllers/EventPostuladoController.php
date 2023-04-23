<?php

namespace App\Http\Controllers;

use App\Models\EventPostulado;
use Illuminate\Http\Request;

class EventPostuladoController extends Controller
{

    public function index()
    {
        $asistencia_evento = EventPostulado::with(['postulado:id,nombre', 'evento:id,fecha'])
            ->select('event_postulado.id', 'postulado.nombre as postulado', 'evento.fecha as fecha_evento', 'asistencia', 'inscripcion', 'notificado')
            ->get();
    
        return view('tables.event-table', compact('asistencia_evento'));
    }
}
