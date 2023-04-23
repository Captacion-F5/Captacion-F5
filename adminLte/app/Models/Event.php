<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Event extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','fecha'];
    protected $table = 'event';


    public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_event', 'event_id', 'bootcamp_id' );
    }

    public function postulados()
    {
        return $this->belongsToMany(Postulado::class, 'event_postulado', 'postulado_id', 'event_id')
        ->withPivot('asistencia', 'inscripcion', 'notificado', 'invitation');
    }

}
