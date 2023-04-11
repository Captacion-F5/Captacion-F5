<?php

namespace App\Http\Controllers;

use App\Models\Postulado;
use Illuminate\Http\Request;
use App\Models\Bootcamp;



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

    // Crea un nuevo postulante con los datos del formulario
    $postulante = new Postulado();
    $postulante->nombre = $request->input('nombre');
    $postulante->mail = $request->input('mail');
    $postulante->telefono = $request->input('telefono');
    $postulante->url_perfil = $request->input('url_perfil');
    $postulante->save();

    // Obtén el ID del bootcamp seleccionado
    $bootcampNombre = $request->input('bootcamp_nombre');
    $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
    if ($bootcamp) {
        // Registra la relación en la tabla pivot
        $postulante->bootcamp()->attach($bootcamp->id);
    }

    // Redirecciona a la página de éxito o muestra un mensaje de éxito
    return redirect('/dashboard')
        ->with('success', 'El postulante ha sido añadido exitosamente.');
}


    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nombre' => 'required',
    //         'mail' => 'required|email',
    //         'telefono' => 'required',
    //         'url_perfil' => 'required|url',
    //         'bootcamp_nombre' => 'required',
    //     ]);

    //     // Crea un nuevo postulante con los datos del formulario
    //     $postulante = new Postulado();
    //     $postulante->nombre = $request->input('nombre');
    //     $postulante->mail = $request->input('mail');
    //     $postulante->telefono = $request->input('telefono');
    //     $postulante->url_perfil = $request->input('url_perfil');

    //     $postulante->save();
    //     $postuladoId = $postulante->id; 

    //     $bootcampNombre = $request->input('bootcamp_nombre');
    //     //registrar los id en la tabla bootcamp postulado
    //     $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
    //     if ($bootcamp) {
    //         $bootcampId = $bootcamp->id;

    //         // Crea un nuevo postulado-bootcamp en la tabla pivot
    //         $postulante->bootcamp()->attach($bootcampId, ['postulado_id' => $postuladoId]);
            
    //         $postulante->bootcamp_id = $bootcampId;
    //     }

    //     $postulante->save();
    //     // $bootcampNombre = $request->input('bootcamp_nombre');
    //     // $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
    //     // if ($bootcamp) {
    //     //     $postulante->bootcamp_id = $bootcamp->id;
    //     // }
    
        
    //     // Redirecciona a la página de éxito o muestra un mensaje de éxito
    //     return redirect()
    //     ->with('success', 'El postulante ha sido añadido exitosamente.');
    // }

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
