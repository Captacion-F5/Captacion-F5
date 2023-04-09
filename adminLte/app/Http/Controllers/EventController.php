<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Event::all();
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento = new Event;
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->save();
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
        $evento = Event::find($id);
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $evento = Event::find($id);
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->save();
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evento = Event::find($id);
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente.');
    }
}
