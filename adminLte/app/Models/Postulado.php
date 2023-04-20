<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'genero', 'mail', 'telefono', 'url_perfil'];

    protected $table = 'postulado';

    public function bootcamp()
    {
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_postulado',  'bootcamp_id');
    }
    public function eventos()
    {
        return $this->belongsToMany(Event::class)->withPivot('asistencia', 'inscripcion');
    }

    public function scopeSearchPost($queryPost, $searchPost)
    {
        return $queryPost->where(function ($queryPost) use ($searchPost) {
            $queryPost->where('nombre', 'LIKE', '%' . $searchPost . '%')
                ->orWhere('mail', 'LIKE', '%' . $searchPost . '%');
        });
    }

}

