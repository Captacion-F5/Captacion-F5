<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostuladoAsistenciaEvento extends Model
{
    use HasFactory;
    protected $table = 'postulados-asistencias-eventos'; 

    
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    
    public function postulado()
    {
        return $this->belongsTo(Postulado::class, 'postulado_id');
    }
}
