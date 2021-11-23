<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Bienvenido a crear {{ __('Materias') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

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
					<div class="md:grid md:grid-cols-3 md:gap-6 bg-white rounded-md">
					  <div class="md:col-span-1  ">
						<div class="px-4 mx-4 my-4 sm:px-0">
						  <h3 class="text-lg font-medium leading-6 text-gray-900">Formulario para editar de la Materia </h3>
						  <p class="mt-1 text-sm p-4  text-gray-600">
							Use el formulario para editar datos de la materia.
						  </p>
						</div>
					  </div>
				
					  <div class="mt-5 md:mt-0 md:col-span-2">
				
						<form action="{{route('materias.store')}}" method="POST" enctype="multipart/form-data">
							@csrf
							
							
						  <div class="shadow overflow-hidden sm:rounded-md">
							<div class="px-4 py-5 bg-white sm:p-6">
							  <div class="grid grid-cols-6 gap-6">
								  
								<div class="col-span-6 sm:col-span-3">
									<label for="rol" class="block text-sm font-medium text-gray-700">Nombre de la materia<:</label>
									  <input type="text"  name="nombre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md required">				  
								</div>
								
				
								<div class="col-span-6 sm:col-span-3">
								  <label for="Descripcion" class="block text-sm font-medium text-gray-700">Sigla</label>
								  <input type="text" name="sigla"    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								</div>
								<h3 class="text-lg font-medium leading-6 text-gray-900">Horario </h3>
				
								<div class="col-span-6 sm:col-span-6 lg:col-span-2">
									<label for="estado" class="block text-sm font-medium text-gray-700">Inicio</label>
									<input type="time" name="t_inicio"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								</div>
				
								<div class="col-span-6 sm:col-span-6 lg:col-span-2">
									<label for="estado" class="block text-sm font-medium text-gray-700">Final</label>
									<input type="time" name="t_final"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								</div>
								<div class="col-span-6 sm:col-span-3">
									<label for="Descripcion" class="block text-sm font-medium text-gray-700">Año</label>
									<input type="date" name="año"    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								  </div>
				
							  </div>
							</div>
								<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
								  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
								Guardar materia
								  </button>
							</div>
						  </div>
						</form>
					  </div>
					</div>
				</div>
                
            </div>
        </div>
    </div>
</x-app-layout>


