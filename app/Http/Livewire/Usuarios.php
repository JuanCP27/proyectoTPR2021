<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;
class Usuarios extends Component
{
    public $usuarios;
    public function index()
    {
        $this->usuarios= Usuario::all();

        return view('livewire.usuarios');
    }
}
