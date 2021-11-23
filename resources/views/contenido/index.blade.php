<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contenidos') }}
        </h2>
    </x-slot>
   




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($contenido as $contenido)
                <div class="w-2/3 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden">

                    <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">The title of the card here</div>
                
                    <div class="flex justify-between items-center px-6 py-4">
                      <div class="bg-orange-600 text-xs uppercase px-2 py-1 rounded-full border border-gray-200 text-gray-200 font-bold">Under Review</div>
                      <div class="text-sm">May 14, 1988</div>
                    </div>
                
                    <div class="px-6 py-4 border-t border-gray-200">
                      <div class="border rounded-lg p-4 bg-gray-200">
                        Here is a short comment about this employee.
                      </div>
                    </div>
                
                    <div class="bg-gray-200 px-6 py-4">
                      <div class="uppercase text-xs text-gray-600 font-bold">Employee</div>
                
                      <div class="flex items-center pt-3">
                        <div class="bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full uppercase font-bold text-white">TN</div>
                        <div class="ml-4">
                          <p class="font-bold">Tony Nguyen</p>
                          <p class="text-sm text-gray-700 mt-1">Instructor</p>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
            <div class="w-2/3 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden">

                <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">Tema:{{$contenido->nombre}}</div>
            
                <div class="flex justify-between items-center px-6 py-4">
                  <div class="bg-orange-600 text-xs uppercase px-2 py-1 rounded-full border border-gray-200 text-gray-200 font-bold">Under Review</div>
                  <div class="text-sm">May 14, 1988</div>
                </div>
            
                <div class="px-6 py-4 border-t border-gray-200">
                  <div class="border rounded-lg p-4 bg-gray-200">
                    Here is a short comment about this employee.
                  </div>
                </div>
            
                <div class="bg-gray-200 px-6 py-4">
                  <div class="uppercase text-xs text-gray-600 font-bold">Employee</div>
            
                  <div class="flex items-center pt-3">
                    <div class="bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full uppercase font-bold text-white">TN</div>
                    <div class="ml-4">
                      <p class="font-bold">Tony Nguyen</p>
                      <p class="text-sm text-gray-700 mt-1">Instructor</p>
                    </div>
                  </div>
                </div>
              </div>
        
            </div>


        </div>
    </div>
</x-app-layout>


<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a la seccion de contenidos</a></h1>

<div class=" max-w-md sm-grid-cols-2 bg-gray-300 mx-auto">
<div class="grid sm-grid-cols-2 md-grid-cols-2 lg-grid-cols-1 gap-4">
    @foreach($contenido as $contenido)
    <h1><a href="/materias/{{$contenido->id_materia}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Regresar a Materia </a></h1>

        <div class="max-w mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
             <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$contenido->nombre}}</div>
                    <p class="mt-2 text-gray-800">{{$contenido->descripcion}} </p>
                    <a href="/evaluacion/{{$contenido->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Evaluacion</a>
                    <a href="/actividades/{{$contenido->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Actividad</a>
                
                </div>
            </div>
         </div>
    @endforeach
</div>
</div>


