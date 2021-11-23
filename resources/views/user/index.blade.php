<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Bienvenido {{Auth::user()->name}} a la sección de {{ __('Usuarios') }}
      </h2>
  </x-slot>
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <a type="button" href="{{route('user.create')}}" class="bg-green-500 px-12 py-2 rounded text-gray-200 hover:text-indigo-900">
              Crear Nuevo Usuario
            </a>
            <div class="flex flex-col text-left">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div
                    class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Nombre
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Title
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Status
                          </th>
                          <th
                            scope="col"
                            class="
                              px-6
                              py-3
                              text-left text-xs
                              font-medium
                              text-gray-500
                              uppercase
                              tracking-wider
                            "
                          >
                            Rol
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($user as $user)
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="" alt=""/>
                                  </div>
                              <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">
                                    {{$user->name}}
                                  </div>
                                  <div class="text-sm text-gray-500">
                                    flora.wu@example.com
                                  </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Software engineer</div>
                            <div class="text-sm text-gray-500">IT</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 ">
                              Active
                            </span>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                           @if (!@empty($user->getRoleNames()))
                              @foreach ($user->getRoleNames() as $rolName)
                              {{$rolName}}
                              @endforeach
                           @endif
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      
                            
                              <a type="button" href="{{route('user.show',$user)}}" class="bg-blue-500 px-1 py-2 rounded text-gray-200 hover:text-indigo-900">
                                Mostrar
                              </a>
                             
                              <x-jet-button href="" class="ml-4">
                                  <a href="{{route('user.edit',$user->id)}}">Editar</a>
                              </x-jet-button>
                    
                            
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



