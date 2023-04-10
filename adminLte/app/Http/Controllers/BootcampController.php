<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $bootcamps = Bootcamp::with('school')->get();

    return view('bootcamps.index', compact('bootcamps'));
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
        $bootcamp->save();

        return redirect()->route('bootcamps.index')->with('success', 'Bootcamp creado exitosamente.');
        // $request->validate([
        //     'school_id' => 'required',
        //     'nombre' => 'required',
        //     'inicio' => 'required|date',
        // ]);

        // Bootcamp::create([
        //     'school_id' => $request->escuela_id,
        //     'nombre' => $request->nombre,
        //     'inicio' => $request->fecha_inicio,
        // ]);

        // $bootcamp = new Bootcamp();
        // $bootcamp->nombre = $request->input('nombre');
        // $bootcamp->inicio = $request->input('inicio');
        // $bootcamp->school = $request->input('school_id');
        // $bootcamp->save();

        // return redirect()->route('bootcamps.index')->with('success', 'Bootcamp creado exitosamente.');
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

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Bootcamp $bootcamp)
    // {
    //     if ($bootcamp->exists()) {
    //         $bootcamp->nombre = $request->input('nombre');
    //         $bootcamp->inicio = $request->input('inicio');
    //         $bootcamp->school_id = $request->input('school_id');
    //         $bootcamp->save();

    //         return redirect()->route('bootcamps.index');
    //     } else {
    //         return redirect()->back()->withErrors(['message' => 'El bootcamp que estás intentando actualizar no existe.']);
    //     }
    // }
    public function update(Request $request, Bootcamp $bootcamp)
    {
        $request->validate([
            'nombre' => 'required',
            'inicio' => 'required|date',
            'school_id' => 'required',
        ]);

        $bootcamp->nombre = $request->input('nombre');
        $bootcamp->inicio = $request->input('inicio');
        $bootcamp->school_id = $request->input('school_id');
        $bootcamp->save();

        return redirect()->route('bootcamps.index')->with('success', 'Bootcamp actualizado exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
//     public function destroy(Bootcamp $bootcamp)
// {
//     $bootcamp->delete();

//     return redirect()->route('bootcamps.index');
// }
public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        return redirect()->route('bootcamps.index')->with('success', 'El bootcamp ha sido eliminado.');
    }

}
