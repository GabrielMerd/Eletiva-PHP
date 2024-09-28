<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    // Método para exibir a lista de equipamentos
    public function index()
    {
        // Carregar equipamentos com suas respectivas marcas e categorias
        $equipamentos = Equipamento::with('marca', 'categoria')->get();
        
        return view('equipamentos.index', compact('equipamentos'));
    }

    // Método para exibir o formulário de criação
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('equipamentos.create', compact('marcas', 'categorias'));
    }
    

    // Método para salvar um novo equipamento no banco de dados
    public function store(Request $request)
    {
        // Valida os dados
        $data = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'categoria_id' => 'required',
            'marca_id' => 'nullable',
            'nova_marca' => 'nullable'
        ]);
    
        // Verifica se uma nova marca foi inserida
        if ($request->filled('nova_marca')) {
            $marca = Marca::firstOrCreate(['nome' => $request->nova_marca]);
            $data['marca_id'] = $marca->id;
        }
    
        // Salva o equipamento com a marca correspondente
        Equipamento::create($data);
    
        return redirect()->route('equipamentos.index');
    }
    // Método para exibir os detalhes de um equipamento específico
    public function show($id)
    {
        $equipamento = Equipamento::findOrFail($id);
        return view('equipamentos.show', compact('equipamento'));
    }

    // Método para exibir o formulário de edição
    public function edit($id)
    {
        $equipamento = Equipamento::findOrFail($id);
        $marcas = Marca::all(); // Buscar todas as marcas
        $categorias = Categoria::all();
        return view('equipamentos.edit', compact('equipamento', 'marcas', 'categorias'));
    }
    

    // Método para atualizar um equipamento existente
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'marca_id' => 'nullable|exists:marcas,id',
            'nova_marca' => 'nullable|string|max:255',
            'categoria_id' => 'required|exists:categorias,id', // Adicione validação para categoria_id se necessário
        ]);
    
        $equipamento = Equipamento::findOrFail($id);
    
        // Verificar se o campo nova_marca está preenchido
        if ($request->filled('nova_marca')) {
            $marca = Marca::create(['nome' => $request->input('nova_marca')]);
            $validated['marca_id'] = $marca->id; // Associa a nova marca ao equipamento
        }
    
        // Atualização do equipamento
        $equipamento->update($validated);
    
        return redirect()->route('equipamentos.index')->with('success', 'Equipamento atualizado com sucesso.');
    }    

    // Método para deletar um equipamento
    public function destroy($id)
    {
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->delete();
        return redirect()->route('equipamentos.index');
    }
}
