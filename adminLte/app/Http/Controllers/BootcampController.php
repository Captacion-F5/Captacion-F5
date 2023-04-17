<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Bootcamp;
use Illuminate\Http\Request;
use App\Models\Postulado;
use App\Models\Event;


class BootcampController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schools = School::all();
        $active = $request->query('active');
        $search = $request->query('search');

        $bootcamps = Bootcamp::with('school');

        if ($active === '1') {
            $bootcamps = $bootcamps->where('active', 1);
        } elseif ($active === '0') {
            $bootcamps = $bootcamps->where('active', 0);
        }

        if ($search) {
            $bootcamps = $bootcamps->search($search);
        }

        $bootcamps = $bootcamps->get();

        return view('bootcamps.index', compact('bootcamps', 'schools'));
    }



    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $schools = School::all();
        return view('bootcamps.create', compact('schools'));
    }



    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $bootcamp = new Bootcamp();
        $bootcamp->nombre = $request->input('nombre');
        $bootcamp->inicio = $request->input('inicio');
        $bootcamp->school_id = $request->input('school_id');
        $bootcamp->active = $request->input('active');

        $bootcamp->save();

        return redirect()->route('bootcamps.index')->with('success', 'Bootcamp creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bootcamp $bootcamp)
    {
        return view('bootcamp.show', compact('bootcamp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bootcamp $bootcamp)
    {
        return view('bootcamps.edit', compact('bootcamp'));
    }

    public function update(Request $request, Bootcamp $bootcamp)
    {
        $request->validate([
            'nombre' => 'required',
            'inicio' => 'required|date',
            'school_id' => 'required',
            'active' => 'required'
        ]);

        $bootcamp->nombre = $request->input('nombre');
        $bootcamp->inicio = $request->input('inicio');
        $bootcamp->school_id = $request->input('school_id');
        $bootcamp->active = $request->input('active');

        $bootcamp->save();

        return redirect()->route('bootcamps.index')->with('success', 'Bootcamp actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bootcamp $bootcamp)
    {
        // $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        return redirect()->route('bootcamps.index')->with('success', 'El bootcamp ha sido eliminado.');
    }

    public function general($id)
    {
        // Obtén el bootcamp seleccionado por su ID, junto con sus postulados relacionados
        $bootcamp = Bootcamp::with('postulado')->find($id);
        // Retorna los datos del bootcamp y sus postulados a la vista "general"
        return view('pages.general', compact('bootcamp'));
    }

    
}
