<?php

namespace App\Http\Controllers;

use App\Models\Postulado;
use Illuminate\Http\Request;
use App\Models\Bootcamp;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PostuladoImport;
use App\Models\Event;





class PostuladoController extends Controller
{
    public function index(Request $request)
    {
        $searchPost = $request->input('search');
        $postulados = Postulado::with('bootcamp')->searchPost($searchPost)->get();
        return view('pages.postulado')->with('postulados', $postulados);
    }



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

    public function store(Request $request, Postulado $postulado)
    {
        $request->validate([
            'nombre' => 'required',
            'genero' => 'required',
            'mail' => 'required|email',
            'telefono' => 'required',
            'url_perfil' => 'required|url',
            'bootcamp_nombre' => 'required',
        ]);

        $postulado = Postulado::where('nombre', Str::lower($request->input('nombre')))
            ->orWhere('mail', $request->input('mail'))
            ->first();

        if ($postulado) {

        $postulado->nombre = Str::lower($request->input('nombre'));
        $postulado->genero = $request->input('genero');
        $postulado->mail = Str::lower($request->input('mail'));
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');
        $postulado->save();

        } else {
            $postulado = new Postulado();
            $postulado->nombre = Str::lower($request->input('nombre'));
            $postulado->genero = $request->input('genero');
            $postulado->mail = Str::lower($request->input('mail'));
            $postulado->telefono = $request->input('telefono');
            $postulado->url_perfil = $request->input('url_perfil');
            $postulado->save();
        }

        $bootcampNombre = $request->input('bootcamp_nombre');
        $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
        if ($bootcamp) {
            $postulado->bootcamp()->syncWithoutDetaching($bootcamp->id);
        }

        return redirect('/dashboard')->with('success', 'El postulante ha sido añadido exitosamente.');

    }
   
    public function edit($id)
    {
        $postulado = Postulado::find($id);
        $bootcamps = Bootcamp::all();
        return view('postulado.edit', ['postulado' => $postulado, 'bootcamps' => $bootcamps]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'genero' => 'required',
            'mail' => 'required|email',
            'telefono' => 'required',
            'url_perfil' => 'required|url',
            'bootcamp_nombre' => 'required',
        ]);

        $postulado = Postulado::find($id);

        $postulado->nombre = $request->input('nombre');
        $postulado->genero = $request->input('genero');
        $postulado->mail = $request->input('mail');
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');

        $postulado->save();
        $nombres = explode(',', $request->input('bootcamp_nombre'));
        $nombres = array_map('trim', $nombres);
        $bootcampIds = Bootcamp::whereIn('nombre', $nombres)->pluck('id');
        $postulado->bootcamp()->sync($bootcampIds);

        return redirect()->route('postulado', ['id' => $postulado->id])->with('success', 'Los datos del postulante se han actualizado correctamente.');
    }

    public function destroy($id)
    {
        $postulado = Postulado::findOrfail($id);
        $postulado->delete();
        return redirect('postulado')->with('success', 'El postulante ha sido eliminado correctamente.');
    }

    public function importar(Request $request)
    {
        if ($request->hasFile('import_file')) {
            Excel::import(new PostuladoImport(), request()->file('import_file'));
        }
        return redirect('postulado')->with('success', 'El archivo ha sido añadido correctamente.');
    }
<<<<<<< HEAD


        public function obtener_datos_bootcamp($bootcampId)
=======
   
    
    public function obtener_datos_bootcamp($bootcampId)
>>>>>>> 506d6b5391d8737693d21260c731f7246e31c55d
    {
        $bootcamp = Bootcamp::findOrFail($bootcampId);
        $postulados = $bootcamp->postulado;
        $generos = $postulados->pluck('genero');
        // Retorna los datos de los candidatos en formato JSON
        return response()->json(['postulados' => $postulados, 'generos' => $generos]);
    }

    public function obtener_datos_ejercicios($bootcampId)
    {
        $bootcamp = Bootcamp::findOrFail($bootcampId);
        $postulados = $bootcamp->postulado;
        $ejercicio = $postulados->pluck('ejercicios');
        // Retorna los datos de los candidatos en formato JSON
        return response()->json(['postulados' => $postulados, 'ejercicios' => $ejercicio]);
    }



    public function obtener_datos_event($bootcampId)
    {
        $eventos = Event::whereHas('bootcamp', function ($query) use ($bootcampId) {
                $query->where('bootcamp_id', $bootcampId);
            })
            ->get(['id', 'nombre']);

        $postuladosPorEvento = $eventos->mapWithKeys(function ($evento) {
            $postulados = $evento->postulados()
                ->select('asistencia', 'inscripcion')
                ->get();

        $asistencia = $postulados->filter(function ($postulado) {
            return $postulado->pivot->asistencia === 0;
        })->count();

        $inscripcion = $postulados->filter(function ($postulado) {
            return $postulado->pivot->inscripcion === 0;
        })->count();

            return [
                $evento->nombre => [
                    'asistencia' => $asistencia,
                    'inscripcion' => $inscripcion,
                    'total' => $asistencia + $inscripcion
                ]
            ];
        });
        $asistenciaTotal = $postuladosPorEvento->sum(function ($evento) {
            return $evento['asistencia'];
        });

        $inscripcionTotal = $postuladosPorEvento->sum(function ($evento) {
            return $evento['inscripcion'];
        });

        $datos = [
            'eventos' => $eventos->pluck('nombre'),
            'postuladosPorEvento' => $postuladosPorEvento,
            'asistencia' => $postuladosPorEvento->pluck('asistencia'),
            'inscripcion' => $postuladosPorEvento->pluck('inscripcion'),
            'asistenciaTotal' => $asistenciaTotal,
            'inscripcionTotal' => $inscripcionTotal
        ];

        return response()->json($datos);
    }

    public function update_status(Request $request, $id)
    {
        $postulado = Postulado::findOrFail($id);
        $postulado->estado = $request->estado;

        // Obtener la lista de eventos en los que hay al menos un postulante con asistencia
        $asistance = $postulado->bootcamp->event()
            ->with(['postulados' => function ($query) {
                $query->where('asistencia', 1);
            }])
            ->get();

        $postulado->save();

        return back()->with('success', 'El estado del postulante ha sido actualizado correctamente.');
<<<<<<< HEAD

    }


=======
    }

  
    
>>>>>>> 506d6b5391d8737693d21260c731f7246e31c55d
}
