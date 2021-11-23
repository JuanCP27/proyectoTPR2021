<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registro;

class Materia extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre','sigla','año'];
    public function registro(){
        return $this->belongsTo(Registro::class);
    }
    public function Contenido(){
        return $this->belongsTo(Contenido::class);
    }
}
