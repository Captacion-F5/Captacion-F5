<?php

namespace App\Imports;

use App\Models\Postulado;
use App\Models\BootcampPostulado;
use App\Models\Bootcamp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostuladoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        $postulado = new Postulado([
            'nombre' => $row['nombre'],
            'genero' => $row['genero'],
            'mail' => $row['mail'],
            'telefono' => $row['telefono'],
            'url_perfil' => $row['url_perfil'],
        ]);
        $postulado->save();
    
        
        $postuladoAsistenciaEvento = new BootcampPostulado;
        $postuladoAsistenciaEvento->postulado_id = $postulado->id;
    
        $bootcamp = Bootcamp::where('nombre', $row['bootcamp_nombre'])->first();
        if ($bootcamp) {
            $bootcampId = $bootcamp->id;
        } else {
            //Manejar el caso en el que no se encuentra un bootcamp con el nombre especificado
            throw new \Exception('No se ha encontrado el bootcamp especificado: ' . $row['bootcamp_nombre']);
        }
    
        $postuladoAsistenciaEvento->bootcamp_id = $bootcampId;
        $postuladoAsistenciaEvento->save();
    
        return $postulado;
    }
}
