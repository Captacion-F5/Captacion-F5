<?php

namespace App\Http\Controllers;

use App\Models\Postulado;
use Illuminate\Http\Request;
use App\Models\Bootcamp;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PostuladoImport;





class PostuladoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $postulados = Postulado::all();
        $postulados = Postulado::with('bootcamp')->get();
        return view('pages.postulado')->with('postulados', $postulados);
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

    // Busca si el postulante ya existe en la base de datos
        $postulado = Postulado::where('nombre', Str::lower($request->input('nombre')))
        ->orWhere('mail', $request->input('mail'))
        ->first();

        if ($postulado) {
        // Si el postulante ya existe, actualiza los datos en lugar de crear un nuevo registro
        $postulado->nombre = Str::lower($request->input('nombre'));
        $postulado->genero = $request->input('genero');
        $postulado->mail = Str::lower($request->input('mail'));
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');
        $postulado->save();
        } else {
        // Si el postulante no existe, crea un nuevo registro
        $postulado = new Postulado();
        $postulado->nombre = Str::lower($request->input('nombre'));
        $postulado->genero = Str::lower($request->input('genero'));
        $postulado->mail = Str::lower($request->input('mail'));
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');
        $postulado->save();
        }

        // Obtén el ID del bootcamp seleccionado
        $bootcampNombre = $request->input('bootcamp_nombre');
        $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
        if ($bootcamp) {
            // Registra la relación en la tabla pivot sin desvincular otras relaciones existentes
            $postulado->bootcamp()->syncWithoutDetaching($bootcamp->id);
        }
    
        return redirect('/dashboard')->with('success', 'El postulante ha sido añadido exitosamente.');
       
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
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
        'mail' => 'required|email',
        'telefono' => 'required',
        'url_perfil' => 'required|url',
        'bootcamp_nombre' => 'required',
    ]);

    $postulado = Postulado::find($id);

    $postulado->nombre = $request->input('nombre');
    $postulado->mail = $request->input('mail');
    $postulado->telefono = $request->input('telefono');
    $postulado->url_perfil = $request->input('url_perfil');

    $postulado->save();

    // Obtén los nombres de los bootcamps seleccionados
    $nombres = explode(',', $request->input('bootcamp_nombre'));
    $nombres = array_map('trim', $nombres);

    // Obtén los IDs de los bootcamps seleccionados
    $bootcampIds = Bootcamp::whereIn('nombre', $nombres)->pluck('id');

    // Sincroniza los bootcamps seleccionados en la tabla pivot
    $postulado->bootcamp()->sync($bootcampIds);

    return redirect()->route('postulado', ['id' => $postulado->id])->with('success', 'Los datos del postulante se han actualizado correctamente.');
}
    public function destroy($id)
    {
        $postulado = Postulado::findOrfail($id);
        $postulado->delete();
        return redirect('postulado')->with('success', 'El postulante ha sido eliminado correctamente.');
    }

    public function postulado_excel(Request $request, Postulado $postulado)
    {
    $request->validate([
        'nombre' => 'required',
        'mail' => 'required|email',
        'telefono' => 'required',
        'url_perfil' => 'required|url',
        'bootcamp_nombre' => 'required',
    ]);

    // Busca si el postulante ya existe en la base de datos
        $postulado = Postulado::where('nombre', Str::lower($request->input('nombre')))
        ->orWhere('mail', $request->input('mail'))
        ->first();

        if ($postulado) {
        // Si el postulante ya existe, actualiza los datos en lugar de crear un nuevo registro
        $postulado->nombre = Str::lower($request->input('nombre'));
        $postulado->mail = Str::lower($request->input('mail'));
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');
        $postulado->save();
        } else {
        // Si el postulante no existe, crea un nuevo registro
        $postulado = new Postulado();
        $postulado->nombre = Str::lower($request->input('nombre'));
        $postulado->genero = ($request->input('genero'));
        $postulado->mail = Str::lower($request->input('mail'));
        $postulado->telefono = $request->input('telefono');
        $postulado->url_perfil = $request->input('url_perfil');
        $postulado->save();
        }

        // Obtén el ID del bootcamp seleccionado
        $bootcampNombre = $request->input('bootcamp_nombre');
        $bootcamp = Bootcamp::where('nombre', $bootcampNombre)->first();
        if ($bootcamp) {
            // Registra la relación en la tabla pivot sin desvincular otras relaciones existentes
            $postulado->bootcamp()->syncWithoutDetaching($bootcamp->id);
        }

    
        $file = $request->file('import_file');
        
        Excel::import(new PostuladoImport, $file);

        // return redirect('/dashboard')
        return redirect()->route('postulado.index')
        ->with('success', 'El postulante ha sido añadido exitosamente.');
    }


    //importar datos desde Excel
    public function importar(Request $request){
     
        if($request->hasFile('import_file')){
            
            Excel::import(new PostuladoImport(), request()->file('import_file'));
            }

            return back();
        }
    
    public function obtener_datos_bootcamp($bootcampId)
    {
        $bootcamp = Bootcamp::findOrFail($bootcampId);
        $postulados = $bootcamp->postulado;
        $generos = $postulados->pluck('genero');
        // Retorna los datos de los candidatos en formato JSON
        return response()->json(['postulados' => $postulados, 'generos' => $generos]);
    }
    // public function obtener_datos_bootcamp()
    // {
    //     $bootcamps = Bootcamp::all();
    //     $data = [];
    //     foreach ($bootcamps as $bootcamp) {
    //         $postulados = $bootcamp->postulado;
    //         $generos = $postulados->pluck('genero')->toArray();
    //         $data[$bootcamp->id] = $generos;
    //     }
    //     // Retorna los datos de los candidatos en formato JSON
    //     return response()->json($data);
    // }

            
        
}

