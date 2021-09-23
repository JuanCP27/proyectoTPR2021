@extends('layouts.layout')

@section('title', 'Materias')

@section('content')


<h1>Bienvenido este es la materia {{$materia->nombre}} </h1>
<br>
<a href="/materias" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a materias...</a>
<a href="/contenido/create/?id_materia={{$materia->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Agregar temas ...</a>
<a href="/contenido/?id={{$materia->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Mostrar temas ...</a>

@endsection