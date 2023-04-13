<?php

namespace App\Imports;

use App\Models\Postulado;
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
        return new Postulado([
            'nombre' => $row['nombre'],
            'genero' => $row['genero'],
            'mail' => $row['mail'],
            'telefono' => $row['telefono'],
            'url_perfil' => $row['url_perfil'],
            
            // 'bootcamp_nombre' => $row['bootcamp']
        ]);
    }
}


// {
//     return new Postulado([
//         'nombre' => $row['nombre'],
//         'mail' => $row['mail'],
//         'telefono' => $row['telefono'],
//         'url_perfil' => $row['url_perfil'],
//         'genero' => $row['genero'],
//         'bootcamp_nombre' => $row['bootcamp']
//     ]);
// }