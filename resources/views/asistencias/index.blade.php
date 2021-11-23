<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <button class="bg-yellow-400 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
              <a href="{{route('asistencia.create')}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Crear nuevo usuario...</a>
            
            </button>
            
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
            
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            FECHA
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           DESCRIPCION 
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ESTADO
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                          
                        </tr>
                      </thead>
            
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($asistencia as $asistencia)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900"></div>
                                <div class="text-sm text-gray-500">{{$asistencia->fecha_registro}}</div>
                              </div>
                            </div>
                          </td>
            
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$asistencia->id_tipo}}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                              {{$asistencia->estado}}
                            </span>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                           <button  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              <a href="/asistencia/{{$asistencia->id}}/edit"  class="text-white hover:text-yellow-200">Editar</a>
                            
                              </button>
                            
                          </td>
                        </tr>
                        @endforeach
                        <!-- More people... -->
                      </tbody>
            
                    </table>
            
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>

