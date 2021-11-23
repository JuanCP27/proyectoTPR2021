<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\User;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materia = Materia::paginate();
        return view('materias.index', compact('materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre'=>'required',
            'sigla'=>'required|unique:materias,sigla',
            't_inicio'=>'required',
            't_final'=>'required',
            'año'=>'required',
        ]);

        $input = $request->all();
            
        $materia = new Materia($input); 
        
        $materia->t_inicio = $request->input('t_inicio');
        $materia->t_final = $request->input('t_final');
        $materia->año = $request->input('año');

        
        $materia->save();

        $materia = Materia::All();
        return view('materias.index', compact('materia')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contenido = Contenido::where('id_materia',$id)->get();
        $materia=Materia::get('id',$id);
        return view('materias.show', compact('contenido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materia = Materia::find($id); 

        $validatedData = $request->validate([
            'nombre'=>'required',
            'sigla'=>'required',
            'año'=>'required'
            ]);
            
        
        
        $materia->nombre = $request->input('nombre');
        $materia->sigla = $request->input('sigla');
        $materia->año = $request->input('año');
        $materia->update();

        
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
