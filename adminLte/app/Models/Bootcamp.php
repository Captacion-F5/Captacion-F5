<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'school_id', 'inicio'];
    protected $table = 'bootcamp';
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function postulado()
    {
        return $this->belongsToMany(Postulado::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'bootcamp_event', 'bootcamp_id', 'event_id');
    }
}
    

