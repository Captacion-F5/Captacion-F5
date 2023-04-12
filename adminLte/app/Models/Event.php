<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','fecha','bootcamp_id[]'];
    protected $table = 'event';
    
        
    public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'event_postulado', 'event_id','postulado_id');
    }

    
   /* public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_postulado', 'postulado_id', 'bootcamp_id');
    }
    */
}
