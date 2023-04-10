<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'mail', 'telefono', 'url_perfil'];

    protected $table = 'postulado';
}
