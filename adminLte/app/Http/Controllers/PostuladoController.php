<?php

namespace App\Http\Controllers;

use App\Models\Postulado;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'mail' => 'required|email',
            'telefono' => 'required',
            'url_perfil' => 'required|url',
        ]);

        // Crea un nuevo postulante con los datos del formulario
        $postulante = new Postulado();
        $postulante->nombre = $request->input('nombre');
        $postulante->mail = $request->input('mail');
        $postulante->telefono = $request->input('telefono');
        $postulante->url_perfil = $request->input('url_perfil');
        $postulante->save();

        // Redirecciona a la página de éxito o muestra un mensaje de éxito
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
