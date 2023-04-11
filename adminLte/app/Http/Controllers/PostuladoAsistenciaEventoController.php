<?php

namespace App\Http\Controllers;

use App\Models\PostuladoAsistenciaEvento;
use Illuminate\Http\Request;

class PostuladoAsistenciaEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencia_evento = PostuladoAsistenciaEvento::with(['postulado:id,nombre', 'evento:id,fecha'])
            ->select('postulado_asistencia_evento.id', 'postulado.nombre as postulado', 'evento.fecha as fecha_evento', 'asistencia', 'inscripcion', 'notificado')
            ->get();
            
        return view('eventos.index', compact('asistencia_evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostuladoAsistenciaEvento $postuladoAsistenciaEvento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostuladoAsistenciaEvento $postuladoAsistenciaEvento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostuladoAsistenciaEvento $postuladoAsistenciaEvento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostuladoAsistenciaEvento $postuladoAsistenciaEvento)
    {
        //
    }
}
