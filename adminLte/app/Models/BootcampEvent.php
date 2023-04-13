<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BootcampEvent extends Model
{
    use HasFactory;
    protected $table = 'bootcamp_event'; 

    
    public function event()
    {
        return $this->belongsToMany(Event::class, 'event_id');
    }

    
    public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_id');
    }
}
