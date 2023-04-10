<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $eventos_asistencia = DB::table('postulado-asistencia-evento')
            ->join('postulado', 'postulado-asistencia-evento.postulado_id', '=', 'postulado.id')
            ->join('event', 'postulado-asistencia-evento.event_id', '=', 'event.id')
            ->select('postulado-asistencia-evento.id', 'postulado.nombre', 'event.fecha')
            ->get();
    
            return view('eventos-asistencia.index', ['eventos_asistencia' => $eventos_asistencia]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {
        $eventos_asistencia = new Event;
        $eventos_asistencia->postulado_id = $request->postulado_id;
        $eventos_asistencia->event_id = $request->event_id;
        $eventos_asistencia->save();
    
        return redirect('/eventos-asistencia')->with('success', 'Se ha creado un nuevo evento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->nombre = $request->input('nombre');
        $event->fecha = $request->input('fecha');
        $event->save();
        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $eventos_asistencia = Event::find($id);
        $eventos_asistencia->postulado_id = $request->postulado_id;
        $eventos_asistencia->evento_id = $request->evento_id;
        $eventos_asistencia->save();
    
        return redirect('/eventos-asistencia')->with('success', 'El evento ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $eventos_asistencia = Event::find($id);
        $eventos_asistencia->delete();
    
        return redirect('/eventos-asistencia')->with('success', 'El evento ha sido eliminado');
    }
}
