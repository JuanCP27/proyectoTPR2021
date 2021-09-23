@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')


<h1>Bienvenido este es el usuario {{$user->name}} </h1>
<br>
<a href="/user" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection