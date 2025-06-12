@extends('layouts.plantilla')

@section('titulo', 'Editar Producto')

@section('contenido')

<div class="w-1/2">
    <form action="{{ route('productos.update', [ 'id' => $producto->id_producto ]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" maxlength="100" required value="{{ $producto->nombre }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
        
            <div class="sm:col-span-2">
                <label for="marca" class="block mb-2 text-sm font-medium text-gray-900">Marca</label>
                <input type="text" name="marca" id="marca" placeholder="Marca del producto" maxlength="100" value="{{ $producto->marca }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <div class="w-full">
                <label for="precio" class="block mb-2 text-sm font-medium text-gray-900">Precio</label>
                <input type="number" name="precio" id="precio" placeholder="Precio del producto" min="0.1" step="0.01" required value="{{ $producto->precio }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <div class="w-full">
                <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                <input type="number" name="stock" id="stock" placeholder="Stock del producto" min="1" step="0.01" value="{{ $producto->stock }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <div class="sm:col-span-2">
                <label for="id_categoria" class="block mb-2 text-sm font-medium text-gray-900">Categor&iacute;a</label>
                <select id="id_categoria" name="id_categoria" required class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">[ SELECCIONE ]</option>
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}" @if ($item->id == $producto->id_categoria) {{ "selected" }} @endif>{{ $item->descripcion }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-800 cursor-pointer">Guardar</button>
        <a href="{{ route('productos.index') }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-800">Regresar</a>
    </form>
</div>

@endsection