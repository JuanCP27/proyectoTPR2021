@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')

<h1>Bienvenido este es el usuario {{$user->name}} {{$user->profile_photo_path}}</h1>

<br>
<a href="/user" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
<br>
<x-jet-button href="" class="ml-4">
    <a href="/user/{{$user->id}}/edit">Editar Usuario</a>
</x-jet-button>
@endsection