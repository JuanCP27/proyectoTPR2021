<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Tipo_asistencia;
use Illuminate\Http\Request;
use App\Models\User;

class AsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia = Asistencia::paginate();
        return view('asistencias.index', compact('asistencia'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $user)
    {
        $id=$user->id;
        $user=User::where('id','id');
        $Tipo_asistencia = Tipo_asistencia::all();
        return view('asistencias.create', compact('Tipo_asistencia','user'));
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
                'fecha_registro'=>'required',
                
                'estado'=>'required'
                ]);
                
            $asistencia = new Asistencia(); 
            
       
            $asistencia->fecha_registro = $request->input('fecha_registro');
            $asistencia->id_tipo = $request->input('id_tipo');
            $asistencia->estado = $request->input('estado');
            $asistencia->save();
    
            $asistencia = Asistencia::All();
            return view('asistencia.index', compact('asistencia')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);
        $Tipo_asistencia = Tipo_asistencia::all();
        return view('asistencias.edit', compact('asistencia', 'Tipo_asistencia'));
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
        $asistencia = Asistencia::find($id); 

        $validatedData = $request->validate([
            'fecha_registro'=>'required',
            'id_tipo'=>'required',
            'estado'=>'required'
            ]);
            
        
        
        $asistencia->fecha_registro = $request->input('fecha_registro');
        $asistencia->id_tipo = $request->input('id_tipo');
        $asistencia->estado = $request->input('estado');
        $asistencia->update();

        
        return redirect('/asistencia');
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
