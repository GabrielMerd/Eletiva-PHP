<?php

namespace App\Http\Controllers;

use App\Models\manutencaos; // Atualize aqui para o novo nome
use App\Models\Equipamento;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    // Método para listar manutenções
    public function index()
    {
        $manutencoes = Manutencaos::with('equipamento')->get();
        return view('manutencaos.index', compact('manutencoes')); // Corrigido o nome da view
    }

    // Método para exibir o formulário de criação
    public function create()
    {
        $equipamentos = Equipamento::all(); // Buscar todos os equipamentos
        return view('manutencaos.create', compact('equipamentos')); // Corrigido o nome da view
    }

    // Método para salvar uma nova manutenção
    public function store(Request $request)
    {
        $manutencaos = Manutencaos::create($request->all());
        return redirect()->route('manutencaos.index'); // Corrigido o nome da rota
    }

    // Método para editar uma manutenção existente
    public function edit($id)
    {
        // Buscar a manutenção e os equipamentos
        $manutencaos = Manutencaos::findOrFail($id);
        $equipamentos = Equipamento::all();
    
        // Passar os dados para a view de edição
        return view('manutencaos.edit', compact('manutencaos', 'equipamentos'));
    }

    // Método para atualizar uma manutenção
    public function update(Request $request, $id)
    {
        $request->validate([
            'equipamento_id' => 'required',
            'data_inicio' => 'required|date',
            'data_fim_prevista' => 'required|date',
        ]);
    
        $manutencaos = Manutencaos::findOrFail($id);
        $manutencaos->update($request->all());
    
        return redirect()->route('manutencaos.index')->with('success', 'Manutenção atualizada com sucesso!');
    }

    // Método para deletar uma manutenção
    public function destroy($id)
    {
        $manutencaos = Manutencaos::findOrFail($id);
        $manutencaos->delete();
    
        return redirect()->route('manutencaos.index')->with('success', 'Manutenção excluída com sucesso!');
    }
}
