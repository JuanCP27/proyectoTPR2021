@extends('layouts.layout')

@section('title', 'Contenidos')

@section('content')


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a la seccion de contenidos</a></h1>

<div class=" max-w-md  max-width: 28rem/* 448px */ bg-gray-300 mx-auto">
<div class="grid sm-grid-cols-1 md-grid-cols-2 lg-grid-cols-4 gap-4">
    @foreach($contenido as $contenido)
    <h1><a href="/materias/{{$contenido->id_materia}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Regresar a Materia </a></h1>

        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
             <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$contenido->nombre}}</div>
                    <p class="mt-2 text-gray-800">{{$contenido->descripcion}} </p>
                    <a href="/evaluacion/{{$contenido->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Evaluacion</a>
                    <a href="/actividades/{{$contenido->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Actividad</a>
                
                </div>
            </div>
         </div>
    @endforeach
</div>
</div>
@endsection

