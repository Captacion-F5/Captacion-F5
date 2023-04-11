<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','fecha'];
    protected $table = 'event';
    
    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class);
    }
    
}
