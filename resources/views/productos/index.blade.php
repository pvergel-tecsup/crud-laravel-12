@extends('layouts.plantilla')

@section('titulo', 'Productos')

@section('contenido')

    <div class="mb-2 text-right">
        <a href="{{ route('productos.create') }}" class="mr-3 text-sm font-medium bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Agregar Producto</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-600">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Marca</th>
                    <th scope="col" class="px-6 py-3">Precio</th>
                    <th scope="col" class="px-6 py-3">Stock</th>
                    <th scope="col" class="px-6 py-3">Categoria</th>
                    <th scope="col" class="px-6 py-3">&nbsp;</th>                    
                </tr>
            </thead>
            <tbody>
            @foreach ($productos as $item)
                <tr class="bg-white border-b dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-300">
                    <td class="px-6 py-2">{{ $item->nombre }}</td>
                    <td class="px-6 py-2">{{ $item->marca }}</td>
                    <td class="px-6 py-2">{{ $item->precio }}</td>
                    <td class="px-6 py-2">{{ $item->stock }}</td>
                    <td class="px-6 py-2">{{ $item->categoria->descripcion }}</td>
                    <td class="px-6 py-2">
                        <div class="flex flex-wrap">
                        <a href="{{ route('productos.show', ['id' => $item->id_producto]) }}" class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Detalle</a>
                        <a href="{{ route('productos.edit', ['id' => $item->id_producto]) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Editar</a>
                        <form action="{{ route('productos.delete', ['id' => $item->id_producto]) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar el producto {{ $item->nombre }}?');">
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
        {{ $productos->links() }}
    </div>
    
@endsection