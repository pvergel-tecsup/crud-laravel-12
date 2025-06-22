<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::orderBy('nombre')->paginate(5);
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('descripcion')->get();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'marca' => 'string|max:100',
            'precio' => 'required|numeric|min:0.1',
            'stock' => 'integer|min:1',
            'id_categoria' => 'required|exists:categoria,id',
        ]);

        try {
            Producto::create([
                'nombre' => $request->nombre,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'stock' => $request->stock,
                'id_categoria' => $request->id_categoria
            ]);

            return redirect()->route('productos.index')
                             ->with('success', 'Producto creado exitosamente.');
        } catch (Exception $e) {
            Log::error('Error creando producto: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al crear un producto.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::orderBy('descripcion')->get();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'marca' => 'string|max:100',
            'precio' => 'required|numeric|min:0.1',
            'stock' => 'integer|min:1',
            'id_categoria' => 'required|exists:categoria,id',
        ]);

        try {
            $producto = Producto::findOrFail($id);
            $producto->update([
                'nombre' => $request->nombre,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'stock' => $request->stock,
                'id_categoria' => $request->id_categoria
            ]);

            return redirect()->route('productos.index')
                             ->with('success', 'Producto actualizado exitosamente.');
        } catch (Exception $e) {
            Log::error('Error actualizando producto: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al actualizar el producto.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->delete();

            return redirect()->route('productos.index')
                             ->with('success', 'Producto eliminado exitosamente.');
        } catch (Exception $e) {
            Log::error('Error actualizando producto: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al eliminar el producto.');
        }
    }
}
