@extends('layouts.plantilla')

@section('titulo', 'Agregar Categoría')

@section('contenido')

<div class="w-1/2">
<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="Descripción de categoría" maxlength="100" required class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
    </div>
    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-800 cursor-pointer">Guardar</button>
    <a href="{{ route('categorias.index') }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-800">Regresar</a>
</form>
</div>

@endsection