<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materia') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a type="button" href="{{route('contenido.create')}}" class="bg-green-500 px-12 py-2 rounded text-gray-100 hover:text-indigo-900">
                    Nueva materia
                  </a>
              

            </div>
        </div>
    </div>
</x-app-layout>

