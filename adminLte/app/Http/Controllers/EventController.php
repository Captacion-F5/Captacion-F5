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
      
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'fecha' => 'required|date'
        ]);
        
        $event = new Event;
        $event->nombre = $validatedData['nombre'];
        $event->fecha = $validatedData['fecha'];
        $event->save();
        
        return redirect()->route('events.index')->with('success', 'Evento creado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       
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
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update() {
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        
    }
}
