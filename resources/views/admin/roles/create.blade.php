<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                


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
      

    

      {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

            
            
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="rol" class="block text-sm font-medium text-gray-700">Nombre del Rol</label>
                  {!! Form::text('name', null, array('class' => 'form-control')) !!}
                </div>
              </div>
                </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="btn btn-primary">Guardar</button>

              
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Crear rol
            </button>

		</div>
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden px-12 border-b border-gray-200 sm:rounded-lg">
                  Lista de permisos
            </div>
            <div class="flex flex-col items-center justify-center h-screen">
                      <div class="flex flex-col">
                            @foreach ($permisos as $value)
                                
                            <label class="inline-flex items-center mt-3">
                              {{ Form::checkbox('permisos[]', $value->id, false, array('class' => 'name')) }}
                              {{ $value->name }}</label>
                
                            <label class="inline-flex items-center mt-3">
                            
                            </label>
                
                            @endforeach
                      </div>
                </div>
        
          </div>
		  </div>
		  {!! Form::close() !!}
    


	  </div>
	</div>
  </div>
  <div class="flex flex-col text-left">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

    </div>
  </div>


            </div>
        </div>
    </div>
</x-app-layout>

