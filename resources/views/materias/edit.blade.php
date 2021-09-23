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
	<form class="form-control" method="POST" action="{{url('materias/'.$materia->id)}}" enctype="multipart/form-data">
		@csrf
        @method('PUT')
	<div class="form-group">
		<label for="">Nombre de la materia</label>
		<input type="text" name="nombre" value="{{$materia->nombre}}"class="form-control">
	</div>
	<div class="form-group">
		<label for="">Sigla</label>
		<input type="text" name="sigla" value="{{$materia->sigla}}"class="form-control">
	</div>
	<div class="form-group">
		<label for="">Año</label>
		<input type="date" name="año" value="{{$materia->año}}" class="form-control">
	</div>
	
	<button type="submit" class="btn btn-primary">Actualizar materia</button>
	
</form>
  </div>


@endsection
