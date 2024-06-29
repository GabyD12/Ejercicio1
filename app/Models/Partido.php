<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    public function gol() {
        return $this->hasMany(Gol::class);
    }

    public function equipo() {
        return $this->belongsToMany(Equipo::class);
    }
}
