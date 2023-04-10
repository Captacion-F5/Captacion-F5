<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostuladoAsistenciaEvento extends Model
{
    use HasFactory;
    protected $table = 'postulado-asistencia-evento'; 

    
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'event_id');
    }

    
    public function postulado()
    {
        return $this->belongsTo(Postulado::class, 'postulado_id');
    }
}
