@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')

<nav x-data="{show:false}" class="flex items-center justify-between flex-wrap text-black bg-blue-500 p-6">
    <div class="flex items-center flex-shrink-0  mr-6">
        <span class="font-semibold text-xl tracking-tight">Bienvenido a la seccion de lista de asistencias</span>
    </div>
    
    <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
      <div>
        <a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded  border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Home</a>
		<a href="#" class="block md:inline-block text-sm px-4 py-2 leading-none rounded  border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">About Me</a>
        
	</div>
    </div>
</nav>
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

<div class="mt-10 sm:mt-0">
	<div class="md:grid md:grid-cols-3 md:gap-6">
	  <div class="md:col-span-1">
		<div class="px-4 sm:px-0">
		  <h3 class="text-lg font-medium leading-6 text-gray-900">Formulario para editar de Rol </h3>
		  <p class="mt-1 text-sm text-gray-600">
			Use el formulario para editar datos.
		  </p>
		</div>
	  </div>

	  <div class="mt-5 md:mt-0 md:col-span-2">

		<form action="{{url('asistencia/'.$asistencia->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
		  <div class="shadow overflow-hidden sm:rounded-md">
			<div class="px-4 py-5 bg-white sm:p-6">
			  <div class="grid grid-cols-6 gap-6">

				<div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label  class="block text-sm font-medium text-gray-700">Fecha</label>
                    <input type="text" name="fecha_registro" readonly value="{{$asistencia->fecha_registro}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
  
  
				<div class="col-span-6 sm:col-span-3">
				  <label  class="block text-sm font-medium text-gray-700">Asistencia</label>
                    <select  name="id_tipo"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                    @foreach($Tipo_asistencia as $Tipo_asistencia)
                        <option value="{{$Tipo_asistencia->id}}">{{$Tipo_asistencia->nombre_tipo_asistencia}}</option>
                    @endforeach                    
                    </select>                 
                </div>
  
				
  
				<div class="col-span-6 sm:col-span-6 lg:col-span-2">
				  <label for="estado" class="block text-sm font-medium text-gray-700">estado</label>
				  <input type="text" name="estado" value="{{$asistencia->estado}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
				</div>
  
			  </div>
			</div>
			<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

              
			  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
				Guardar
			  </button>
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </div>
@endsection