<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BootcampPostulado extends Model
{
    use HasFactory;
    protected $table = 'bootcamp_postulado';


    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class, 'bootcamp_id');
    }


    public function postulado()
    {
        return $this->belongsTo(Postulado::class, 'postulado_id');
    }

    public $timestamps = false;

}

