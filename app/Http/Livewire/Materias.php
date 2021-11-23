<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Materia;

class Materias extends Component
{
    public $materias;
    public function render()
    {
        $this->materia=Materia::all();
        return view('livewire.materias');
    }
}
