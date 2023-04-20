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
    public function event()
    {
        return $this->belongsToMany(Event::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('nombre', 'LIKE', '%' . $search . '%')
            ->orWhereHas('school', function ($query) use ($search) {
                $query->where('nombre', 'LIKE', '%' . $search . '%');
            });
    }


}
