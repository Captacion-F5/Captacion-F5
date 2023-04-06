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
        $schools = School::all();
        return view('bootcamps.create', compact('schools'));
    }



    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required',
            'nombre' => 'required',
            'inicio' => 'required|date',
        ]);

        Bootcamp::create([
            'school_id' => $request->escuela_id,
            'nombre' => $request->nombre,
            'inicio' => $request->fecha_inicio,
        ]);

        return redirect()->route('bootcamps.index');
    }





    /**
     * Display the specified resource.
     */
    public function show(Bootcamp $bootcamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bootcamp $bootcamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'school_id' => 'required',
            'nombre' => 'required',
            'fecha_inicio' => 'required|date',
        ]);

        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->update([
            'school_id' => $request->escuela_id,
            'nombre' => $request->nombre,
            'fecha_inicio' => $request->fecha_inicio,
        ]);

        return redirect()->route('bootcamps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bootcamp $bootcamp)
    {
        //
    }
}
