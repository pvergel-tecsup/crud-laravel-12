@extends('layouts.plantilla')

@section('titulo', 'Detalle de Producto')

@section('contenido')

<div class="w-1/2">
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
            <input type="text" name="nombre" id="nombre" readonly value="{{ $producto->nombre }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
       
        <div class="sm:col-span-2">
            <label for="marca" class="block mb-2 text-sm font-medium text-gray-900">Marca</label>
            <input type="text" name="marca" id="marca" readonly value="{{ $producto->marca }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>

        <div class="w-full">
            <label for="precio" class="block mb-2 text-sm font-medium text-gray-900">Precio</label>
            <input type="text" name="precio" id="precio" readonly value="{{ $producto->precio }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>

        <div class="w-full">
            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
            <input type="text" name="stock" id="stock" readonly value="{{ $producto->stock }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>

        <div class="sm:col-span-2">
            <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900">Categor&iacute;a</label>
            <input type="text" name="categoria" id="categoria" readonly value="{{ $producto->categoria->descripcion }}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
    </div>

    <a href="{{ route('productos.index') }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-800">Regresar</a>
</div>

@endsection