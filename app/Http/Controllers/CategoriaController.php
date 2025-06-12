<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('descripcion')->paginate(5);
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:100'
        ]);

        try {
            Categoria::create([
                'descripcion' => $request->descripcion
            ]);

            return redirect()->route('categorias.index')
                             ->with('success', 'Categoría creada exitosamente.');
        } catch (Exception $e) {
            Log::error('Error creando producto: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al crear una categoría.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'descripcion' => 'required|string|max:100'
        ]);

        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->update([
                'descripcion' => $request->descripcion
            ]);

            return redirect()->route('categorias.index')
                             ->with('success', 'Categoría actualizada exitosamente.');
        } catch (Exception $e) {
            Log::error('Error actualizando categoría: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al crear una categoría.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();

            return redirect()->route('categorias.index')
                             ->with('success', 'Categoría eliminada exitosamente.');
        } catch (Exception $e) {
            Log::error('Error actualizando categoría: ' . $e->getMessage());
            return back()->withInput()
                         ->with('error', 'Ocurrió un error al eliminar la categoría.');
        }
    }
}
