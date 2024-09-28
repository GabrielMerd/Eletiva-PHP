<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("categoria.index", compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect("/categoria")->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Busca a categoria pelo ID
        $categoria = Categoria::findOrFail($id);
        // Retorna a view de edição com os dados da categoria
        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Busca a categoria pelo ID
        $categoria = Categoria::findOrFail($id);
        // Atualiza os dados da categoria
        $categoria->update($request->all());
        // Redireciona para a listagem de categorias com uma mensagem de sucesso
        return redirect("/categoria")->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Busca a categoria pelo ID e a exclui
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        // Redireciona para a listagem de categorias com uma mensagem de sucesso
        return redirect("/categoria")->with('success', 'Categoria excluída com sucesso!');
    }
}
