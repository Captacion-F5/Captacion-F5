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
        return $this->belongsToMany(Bootcamp::class, 'bootcamp_postulado', 'postulado_id', 'bootcamp_id');
    }
    public function scopeSearchPost($queryPost, $searchPost)
    {
        return $queryPost->where(function ($queryPost) use ($searchPost) {
            $queryPost->where('nombre', 'LIKE', '%' . $searchPost . '%')
                ->orWhere('mail', 'LIKE', '%' . $searchPost . '%');
        });
    }

}

