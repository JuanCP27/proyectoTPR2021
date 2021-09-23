@extends('layouts.layout')

@section('title', 'Contenidos')

@section('content')


<h1>Este es el Contenido de {{$contenido->nombre}} </h1>
<br>
<a href="/contenido" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a Temas...</a>
@endsection