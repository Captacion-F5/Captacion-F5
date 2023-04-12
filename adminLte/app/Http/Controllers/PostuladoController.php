<?php

namespace App\Http\Controllers;

use App\Models\Postulado;
use Illuminate\Http\Request;
use App\Models\Bootcamp;
use Illuminate\Support\Str;



class PostuladoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $postulado = Postulado::all();
        return view('/components/forms/applicant-form', compact('postulado'));
    }
    public function eligeBootcamp()
    {
        $bootcamps = Bootcamp::all();
        return view('/components/forms/applicant-form', compact('bootcamps'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'nombre' => 'required',
        'mail' => 'required|email',
        'telefono' => 'required',
        'url_perfil' => 'required|url',
        'bootcamp_nombre' => 'required',
    ]);

    // Busca si el postulante ya existe en la base de datos
        $postulante = Postulado::where('nombre', Str::lower($request->input('nombre')))
        ->orWhere('mail', $request->input('mail'))
        ->first();

        if ($postulante) {
        // Si el postulante ya existe, actualiza los datos en lugar de crear un nuevo registro
        $postulante->nombre = Str::lower($request->input('nombre'));
        $postulante->mail = Str::lower($request->input('mail'));
        $postulante->telefono = $request->input('telefono');
        $postulante->url_perfil = $request->input('url_perfil');
        $postulante->save();
        } else {
        // Si el postulante no existe, crea un nuevo registro
        $postulante = new Postulado();
        $postulante->nombre = Str::lower($request->input('nombre'));
        $postulante->mail = Str::lower($request->input('mail'));
        $postulante->telefono = $request->input('telefono');
        $postulante->url_perfil = $request->input('url_perfil');
        $postulante->save();
        }

        // Obtén el ID del bootcamp seleccionado
        $bootcampNombre = $request->input('bootcamp_nombre');
        $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
        if ($bootcamp) {
            // Registra la relación en la tabla pivot sin desvincular otras relaciones existentes
            $postulante->bootcamp()->syncWithoutDetaching($bootcamp->id);
        }

    return redirect('/dashboard')
        ->with('success', 'El postulante ha sido añadido exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Postulado $postulado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postulado $postulado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postulado $postulado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postulado $postulado)
    {
        //
    }
}
