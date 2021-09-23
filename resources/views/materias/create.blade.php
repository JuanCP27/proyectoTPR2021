@extends('layouts.layout')

@section('title', 'Materias')

@section('content')


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear usuarios</a></h1>
<h1><a href="/materias" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Regresar a Materias </a></h1>
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
<div class="container mx-auto px-4">
	<!-- ... -->
	<form class="form-control" method="POST" action="/materias" enctype="multipart/form-data">
		@csrf
	<div class="form-group">
		<label for="">Nombre de la materia</label>
		<input type="text" name="nombre" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Sigla</label>
		<input type="text" name="sigla" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Año</label>
		<input type="date" name="año" class="form-control">
	</div>
	
	<button type="submit" class="btn btn-primary">Guardar materia</button>
	
</form>
  </div>


@endsection
