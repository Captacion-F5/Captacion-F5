<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','bootcamp_id[]','fecha'];
    protected $table = 'event';
    
        
    public function bootcamps()
    {
        return $this->belongsTo(Bootcamp::class, 'bootcamp', 'bootcamp_id');

       /* return $this->belongsTo(Bootcamp::class);*/
    }

    
   /* public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_postulado', 'postulado_id', 'bootcamp_id');
    }
    */
}
