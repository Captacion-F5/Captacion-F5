<?php

namespace App\Imports;

use App\Models\Postulado;
use Maatwebsite\Excel\Concerns\ToModel;

class PostuladoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Postulado([
            //
        ]);
    }
}
