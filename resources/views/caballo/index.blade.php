<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Caballeros') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Edad
                </th>
                <th scope="col" class="px-6 py-3">
                    Operaciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caballos as $caballo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{route('caballero.show', $caballo->id)}}">{{$caballo->id}}</a>
                </th>
                <td class="px-6 py-4">
                    {{$caballo->nombre}}
                </td>
                <td class="px-6 py-4">
                    {{$caballo->color}}
                </td>
                <td class="px-6 py-4">
                    {{$caballo->edad}}
                </td>
                <td class="flex px-6 py-4 gap-x-4">
                    <a href="{{route('caballero.edit', $caballo->id)}}">Editar</a>
                    <a href="{{route('caballero.destroy', $caballo->id)}}">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-app-layout>