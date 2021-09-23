@extends('layouts.layout')

@section('title', 'Contenidos')

@section('content')


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear contenidos</a></h1>
<h1><a href=/materias/{{$id_materia}} class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Regresar a materia</a></h1>

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


	<form class="form-control" method="POST" action="/contenido" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			
			<input type="text" name="id_materia" value={{$id_materia}} class="form-control">
		</div>
		<div class="form-group">
			<label for="">Nombre del nuevo Tema</label>
			<input type="text" name="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="descripcion" class="form-control">
		</div>
	
	<button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 border px-4 rounded" type="submit">
		Guardar Contenido
	  </button>
	  <button class="bg-blue-500 hover:bg-blue text-black font-bold py-2 px-4 border border-blue-700 rounded">
		Button
	  </button>
	
</form>




@endsection
