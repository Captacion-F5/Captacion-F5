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
        $bootcamps = Bootcamp::all();

    return view('bootcamps.index', compact('bootcamps'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        // $schools = School::all();
        // return view('bootcamps.create', compact('schools'));
        return view('bootcamps.create');
    }



    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
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

        $bootcamp = new Bootcamp();
        $bootcamp->name = $request->input('name');
        $bootcamp->start_date = $request->input('start_date');
        $bootcamp->save();

        return redirect()->route('bootcamps.index');
        // ->with('success', 'Bootcamp creado exitosamente.')
    }





    /**
     * Display the specified resource.
     */
    public function show(Bootcamp $bootcamp)
    {
        return view('bootcamps.show', compact('bootcamp'));
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
    public function update(Request $request, $bootcamp)
    {
        // $request->validate([
        //     'school_id' => 'required',
        //     'nombre' => 'required',
        //     'fecha_inicio' => 'required|date',
        // ]);

        // $bootcamp = Bootcamp::findOrFail($id);
        // $bootcamp->update([
        //     'school_id' => $request->escuela_id,
        //     'nombre' => $request->nombre,
        //     'fecha_inicio' => $request->fecha_inicio,
        // ]);

        $bootcamp->name = $request->input('name');
        $bootcamp->start_date = $request->input('start_date');
        $bootcamp->save();

        return redirect()->route('bootcamps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bootcamp $bootcamp)
    {
        $bootcamp->delete();

        return redirect()->route('bootcamps.index');
    }
}
