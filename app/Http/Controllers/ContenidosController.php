<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $contenido = Contenido::all();
        return view('contenido.index', compact('contenido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id2 = ['id_materia'=>$request->query('id_materia', '')];
        return view('contenido.create')->with($id2);
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
            'id_materia'=>'required',
            'nombre'=>'required',
            'descripcion'=>'required'
            ]);
        $contenido = new Contenido(); 
        $contenido->id_materia= $request ->input('id_materia');
        $contenido->nombre = $request->input('nombre');
        $contenido->descripcion = $request->input('descripcion');
        $contenido->save();
        
    
        
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
        $contenido = Contenido::All();
        return view('contenido.index', compact('contenido')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
