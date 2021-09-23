@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido editar el usuario {{$user->name}}</a></h1>
<br>
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif




	<form class="form-control" method="POST" action="{{url('user/'.$user->id)}}" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Nombre y apellido</label>
			<input type="text" name="name" value="{{$user->name}}" class="form-control">
		</div>
        <div class="form-group">
			<label for=""> Password</label>
			<input type="password" name="password" value="{{$user->password}}"class="form-control">
		</div>
        <div class="form-group">
			<label for=""> Correo Electronico</label>
			<input type="text" name="email" value="{{$user->email}}"class="form-control">
		</div>
		<div class="form-group">
           <label for=""> Foto del docente</label>
			
			<input type="file" accept = "jpg, png, gif, jpeg" name="avatar">
		</div>
		<br>
		<x-jet-button type="submit" class="ml-4">
			{{ __('Guardar Usuario') }}
		</x-jet-button>
		<x-jet-button href="" class="ml-4">
			<a href="/user/{{$user->id}}">Cancelar</a>
		</x-jet-button>
		
	</form>


@endsection