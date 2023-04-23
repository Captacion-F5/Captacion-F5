<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPostulado extends Model
{
    use HasFactory;
    protected $table = 'event_postulado'; 

    
    public function event()
    {
        return $this->belongsToMany(Event::class, 'event_id');
    }

    
    public function postulado()
    {
        return $this->belongsToMany(Postulado::class, 'postulado_id');
    }
}
