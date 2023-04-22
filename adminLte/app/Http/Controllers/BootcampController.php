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


    public function create()
    {
        $schools = School::all();
        return view('bootcamps.create', compact('schools'));
    }

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

    public function show(Bootcamp $bootcamp)
    {
        return view('bootcamp.show', compact('bootcamp'));
    }

    public function edit(Bootcamp $bootcamp)
    {
        $schools = School::all();
        return view('bootcamps.edit', compact('bootcamp','schools'));
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


    public function destroy(Bootcamp $bootcamp)
    {
        $bootcamp->delete();
        return redirect()->route('bootcamps.index')->with('success', 'El bootcamp ha sido eliminado.');
    }

   
    public function general($bootcampId)
    {
        $bootcamp = Bootcamp::findOrFail($bootcampId);
        $postulados = $bootcamp->postulado;
        

        $postulados = $bootcamp->postulado()
            ->with(['event' => function($query) use ($bootcampId) {
                $query->where('postulado_id', $bootcampId);
            }])
            ->get();

        $asistance = $bootcamp->event()
        ->with(['postulados' => function ($query) {
        $query->where('asistencia', 1);
        }]) ->get();    
            
        

        $event = $bootcamp->event()->withCount(['postulados as asistencias_count' => function($query) {
            $query->where('asistencia', 1);
        }])->get();   
            $countSi = $postulados->where('ejercicios', 1)->count();
            $countNo = $postulados->where('ejercicios', 0)->count();
            $totalPostulantes = $bootcamp->postulado()->count();
            $eventos = $bootcamp->event()->pluck('nombre');

        $data = [
            'bootcamp' => $bootcamp,
            'postulado' => $postulados,
            'countSi' => $countSi,
            'countNo' => $countNo,
            'totalPostulantes' => $totalPostulantes,
            'eventos' => $eventos,
            'event' => $event,
            'asistance' => $asistance,
        ];

        return view('pages.general', $data);
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

    public function exercises($bootcampId)
    {
        $bootcamp = Bootcamp::findOrFail($bootcampId);
        $postulados = $bootcamp->postulado;
        
        $postulados = $bootcamp->postulado()
            ->with(['event' => function($query) use ($bootcampId) {
                $query->where('postulado_id', $bootcampId);
            }])
            ->get();
    
        $asistance = $bootcamp->event()
        ->with(['postulados' => function ($query) {
        $query->where('asistencia', 1);
        }]) ->get();    
        
        $exercises = $bootcamp->exercises;
    
        $event = $bootcamp->event()->withCount(['postulados as asistencias_count' => function($query) {
            $query->where('asistencia', 1);
        }])->get();   
            $countSi = $postulados->where('ejercicios', 1)->count();
            $countNo = $postulados->where('ejercicios', 0)->count();
            $totalPostulantes = $bootcamp->postulado()->count();
            $eventos = $bootcamp->event()->pluck('nombre');
    
        return view('pages.exercises', [
            'bootcamp' => $bootcamp,
            'postulado' => $postulados,
            'countSi' => $countSi,
            'countNo' => $countNo,
            'totalPostulantes' => $totalPostulantes,
            'eventos' => $eventos,
            'event' => $event,
            'asistance' => $asistance,
            'exercises' => $exercises,
        ]);
    }


}

