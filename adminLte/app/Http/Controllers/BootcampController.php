<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Bootcamp;
use Illuminate\Http\Request;
use App\Models\Postulado;
use App\Models\Event;
use App\Models\EventPostulado;


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
        $schools = School::all();
        return view('bootcamps.edit', compact('bootcamp', 'schools'));
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

    // public function general($id)
    // {
    //     // Obtén el bootcamp seleccionado por su ID, junto con sus postulados relacionados
    //     $bootcamp = Bootcamp::with('postulado')->find($id);
    //     // Retorna los datos del bootcamp y sus postulados a la vista "general"
    //     return view('pages.general', compact('bootcamp'));
    // }
    public function general($id)
    {
        // Obtener el bootcamp seleccionado por su ID, junto con sus postulados relacionados
        $bootcamp = Bootcamp::with('postulado')->find($id);

        // Obtener todos los eventos asociados al bootcamp
        $eventos = Event::whereHas('bootcamp', function ($query) use ($id) {
            $query->where('bootcamp_id', $id);
        })->get(['id', 'nombre']);

        // Obtener todos los postulados relacionados con los eventos obtenidos
        $postulados = collect();
        foreach ($eventos as $evento) {
            $postulados = $postulados->merge($evento->postulado);
        }

        $nombreEvento = $eventos->first()->nombre;

        // Obtener una colección de datos de asistencia, inscripción y notificación para cada postulado
        $datosPostulados = collect();
        foreach ($postulados as $postulado) {
            $datosPostulados->push([
                'asistencia' => $postulado->asistencia,
                'inscripcion' => $postulado->inscripcion,
                'notificado' => $postulado->notificado
            ]);
        }

        return view('pages.general', [
            'bootcamp' => $bootcamp,
            'eventos' => $eventos,
            'postulados' => $datosPostulados,
            'nombreEvento' => $nombreEvento
        ]);
    }



    public function obtener_datos_tabla_principal()
    {
        //obtiene datos desde el modelo Bootcamp, de bootcamp, escuela y postulado
        $bootcamps = Bootcamp::with(['school'])
        ->withCount(['postulado', 'postulado as ejercicios_count' => function ($query) {
            $query->where('ejercicios', 1);
        }])
        //obtiene del modelo EventPostulado los datos de los eventos
        ->addSelect([
            //RIC
            'asistencia_ric_count' => EventPostulado::selectRaw('count(*)')
                ->join('postulado', 'event_postulado.postulado_id', '=', 'postulado.id')
                ->join('bootcamp_postulado', 'postulado.id', '=', 'bootcamp_postulado.postulado_id')
                ->whereColumn('bootcamp_postulado.bootcamp_id', 'bootcamp.id')
                ->where('event_postulado.event_id', 1)
                ->where('event_postulado.asistencia', true),
            //JPA
            'asistencia_jpa_count' => EventPostulado::selectRaw('count(*)')
                ->join('postulado', 'event_postulado.postulado_id', '=', 'postulado.id')
                ->join('bootcamp_postulado', 'postulado.id', '=', 'bootcamp_postulado.postulado_id')
                ->whereColumn('bootcamp_postulado.bootcamp_id', 'bootcamp.id')
                ->where('event_postulado.event_id', 2)
                ->where('event_postulado.asistencia', true),
            //TPB
            'asistencia_tpb_count' => EventPostulado::selectRaw('count(*)')
                ->join('postulado', 'event_postulado.postulado_id', '=', 'postulado.id')
                ->join('bootcamp_postulado', 'postulado.id', '=', 'bootcamp_postulado.postulado_id')
                ->whereColumn('bootcamp_postulado.bootcamp_id', 'bootcamp.id')
                ->where('event_postulado.event_id', 3)
                ->where('event_postulado.asistencia', true),
            //TF5
            'asistencia_tf5_count' => EventPostulado::selectRaw('count(*)')
                ->join('postulado', 'event_postulado.postulado_id', '=', 'postulado.id')
                ->join('bootcamp_postulado', 'postulado.id', '=', 'bootcamp_postulado.postulado_id')
                ->whereColumn('bootcamp_postulado.bootcamp_id', 'bootcamp.id')
                ->where('event_postulado.event_id', 4)
                ->where('event_postulado.asistencia', true),
        ])
        ->get();

        return view('dashboard', ['bootcamps' => $bootcamps]);
    }
}
