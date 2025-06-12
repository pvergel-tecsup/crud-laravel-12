@extends('layouts.plantilla')

@section('titulo', 'Categorías')

@section('contenido')

    <div class="mb-2 text-right w-1/2">
        <a href="{{ route('categorias.create') }}" class="mr-3 text-sm font-medium bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Agregar Categoría</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-1/2">
        <table class="w-full text-sm text-left rtl:text-right text-gray-600">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3">&nbsp;</th>                    
                </tr>
            </thead>
            <tbody>
            @foreach ($categorias as $item)
                <tr class="bg-white border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300">
                    <td class="px-6 py-2">{{ $item->descripcion }}</td>
                    <td class="px-6 py-2">
                        <div class="flex flex-wrap">
                        <a href="{{ route('categorias.show', ['id' => $item->id]) }}" class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Detalle</a>
                        <a href="{{ route('categorias.edit', ['id' => $item->id]) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Editar</a>
                        <form action="{{ route('categorias.delete', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar la categoría {{ $item->descripcion }}?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 hover:cursor-pointer text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                        </form>
                        </div>   
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-2">
        {{ $categorias->links() }}
    </div>
    
@endsection