<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear caballo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
@if ($errors->any())
<div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Danger</span>
    <div>
      <span class="font-medium">Ensure that these requirements are met:</span>
        <ul class="mt-1.5 list-disc list-inside">
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
      </ul>
    </div>
  </div>
@endif

<div class="relative overflow-x-auto">
<form class="max-w-sm mx-auto" action="{{route('caballo.update', $caballo->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-5">
      <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
      <input type="text" value="{{$caballo->nombre}}" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </div>
    <div class="mb-5">
        <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Caballo</label>
        <select name="color" id="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="blanco" {{$caballo->color == 'blanco' ? 'selected' : ''}}>Blanco</option>
            <option value="negro" {{$caballo->color == 'negro' ? 'selected' : ''}}>Negro</option>
            <option value="naranja" {{$caballo->color == 'naranja' ? 'selected' : ''}}>Naranja</option>
            <option value="marron" {{$caballo->color == 'marron' ? 'selected' : ''}}>Marron</option>
            <option value="otro" {{$caballo->color == 'otro' ? 'selected' : ''}}>Otro</option>
        </select>
    </div>
    <div class="mb-5">
        <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
        <input type="number" value="{{$caballo->edad}}" id="edad" name="edad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
  </form>
  
</div>

        </div>
    </div>
</x-app-layout>
  