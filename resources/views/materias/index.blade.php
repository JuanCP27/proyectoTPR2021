<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bienvenido a la seccion de {{ __('Materias') }}
        </h2>
        
    </x-slot>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a type="button" href="{{route('materias.create')}}" class="bg-green-500 px-12 py-2 rounded text-gray-100 hover:text-indigo-900">
                Nueva materia
              </a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @foreach($materia as $materia)
                    <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row">
                        <div class="w-full md:w-3/5 h-80 bg-red-400">

                        </div>
                        <div class="w-full md:w-1/5 text-left p-6 md:p-4 space-y-2">
                            <p class="text-xl text-gray-700 font-bold"> {{$materia->nombre}}-</p>
                            <p class="text-base text-gray-400 font-normal">{{$materia->sigla}}</p>
                            <div class="flex justify-start space-x-2">
                                <a type="button" href="{{route('materias.show',$materia)}}" class="bg-blue-500 px-1 py-2 rounded text-gray-200 hover:text-indigo-900">
                                    Mostrar
                                </a>
                                <a type="button" href="{{route('materias.edit',$materia)}}" class="bg-blue-500 px-1 py-2 rounded text-gray-200 hover:text-indigo-900">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Card 2-->
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
