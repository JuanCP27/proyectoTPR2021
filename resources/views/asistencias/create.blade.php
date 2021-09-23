@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear usuarios</a></h1>
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

	<form class="form-control" method="POST" action="/user" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Nombre y apellido</label>
			<input type="text" name="name" class="form-control">
		</div>
        <div class="form-group">
			<label for=""> Password</label>
			<input type="password" name="password" class="form-control">
		</div>
        <div class="form-group">
			<label for=""> Correo Electronico</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for=""> Foto del docente</label>
			<input type="file" accept = "jpg, png, gif, jpeg" name="avatar">
		</div>
		

		<button type="submit" class="btn btn-primary">Guardar Usuario</button>
		
	</form>

@endsection
