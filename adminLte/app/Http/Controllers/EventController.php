<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Bootcamp;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index()
    {
        $sort = request()->get('sort');

        if ($sort == 'nombre') {
            $events = Event::with('bootcamp')->orderBy('nombre')->get();
        } elseif ($sort == '-nombre') {
            $events = Event::with('bootcamp')->orderByDesc('nombre')->get();
        } elseif ($sort == 'fecha') {
            $events = Event::with('bootcamp')->orderBy('fecha')->get();
        } elseif ($sort == '-fecha') {
            $events = Event::with('bootcamp')->orderByDesc('fecha')->get();
        } else {
            $events = Event::with('bootcamp')->get();
        }

        return view('eventos.index')->with('events', $events);
    }


    public function create()
    {
        $bootcamps = Bootcamp::pluck('nombre', 'id')->toArray();
        return view('eventos.create', compact('bootcamps'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'fecha' => 'required|date',
            'bootcamp_id' => 'required|array|min:1',
        ]);

        $bootcamp_nombres = $request->input('bootcamp_id', []);
        $bootcamp_ids = Bootcamp::whereIn('nombre', $bootcamp_nombres)->pluck('id')->toArray();

        $evento = new Event;
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->save();
        $evento = $evento->refresh();
        $evento->bootcamp()->sync($bootcamp_ids);

        return redirect()->route('eventos.index')->with('success', 'Se ha añadido un nuevo evento.');
    }
   
    public function show($id)
    {
        $evento = Event::with('bootcamp')->findOrFail($id);
        return view('eventos.show', ['evento' => $evento]);
    }


   
    public function edit($id)
    {
        $evento = Event::findOrFail($id);
        $bootcamp = Bootcamp::pluck('nombre', 'id')->toArray();

        return view('eventos.edit', ['evento' => $evento, 'bootcamp' => $bootcamp]);
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'sometimes',
            'fecha' => 'sometimes|date',
            'bootcamp_id' => 'sometimes|array',
        ]);


        $bootcamp_nombres = $request->input('bootcamp_id', []);
        $bootcamp_ids = Bootcamp::whereIn('nombre', $bootcamp_nombres)->pluck('id')->toArray();

        $evento = Event::findOrFail($id);
        $evento->nombre = $request->input('nombre');
        $evento->fecha = $request->input('fecha');
        $evento->bootcamp()->sync($bootcamp_ids);
        $evento->save();

        return redirect()->route('eventos.index')->with('success', 'El evento se ha actualizado correctamente');
    }

   
    public function destroy($id)
    {
        $evento = Event::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'El evento se ha eliminado.');
    }
}
