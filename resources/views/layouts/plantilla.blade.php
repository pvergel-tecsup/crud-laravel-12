<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - @yield('titulo')</title>
    {{-- Tailwind se agrega a usando Vite --}}
    @vite('resources/css/app.css')
    {{-- Alpine.js para ocultar mensajes tras unos segundos --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <nav class="bg-blue-500">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <div class="text-2xl font-bold pl-3 text-gray-900">CRUD</div>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('productos.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Productos</a>
            <a href="{{ route('categorias.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Categor&iacute;as</a>
          </div>
        </div>
      </div>
    </nav>
    <main class="container p-3">
        <h1 class="text-3xl font-bold">@yield('titulo')</h1>
        
        {{-- Sección de mensajes automáticos --}}
        @if (session('success'))
          <div 
                x-data="{ show: true }" 
                x-show="show" 
                x-init="setTimeout(() => show = false, 3000)" 
                class="mb-4 p-4 border border-green-400 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
          <div 
                x-data="{ show: true }" 
                x-show="show" 
                x-init="setTimeout(() => show = false, 3000)" 
                class="mb-4 p-4 border border-red-400 text-red-700 bg-red-100 rounded">
                {{ session('error') }}
            </div>
        @endif

        <div class="mt-3">
            @yield('contenido')
        </div>
    </main>
</body>
</html>