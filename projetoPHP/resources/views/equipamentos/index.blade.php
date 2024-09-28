@extends('layouts.app')

@section('title', 'Lista de Equipamentos')

@section('content')
    <div class="container">
        <h1 class="text-center">Lista de Equipamentos</h1>

        <!-- Botão de Cadastrar Novo Equipamento -->
        <div class="text-right mb-3">
            <a href="{{ route('equipamentos.create') }}" class="btn btn-primary">Cadastrar Novo Equipamento</a>
        </div>

        <!-- Verifica se existem equipamentos -->
        @if ($equipamentos->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipamentos as $equipamento)
                        <tr>
                            <td>{{ $equipamento->nome }}</td>
                            <td>{{ $equipamento->descricao }}</td>
                            <td>
                                @if($equipamento->marca)
                                    {{ $equipamento->marca->nome }}
                                @else
                                    Sem Marca
                                @endif
                            </td>
                            <td>{{ $equipamento->categoria->nome ?? 'Sem Categoria' }}</td>
                            <td>
                                <a href="{{ route('equipamentos.show', $equipamento->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <!-- Mensagem se não houver equipamentos -->
            <p class="text-center">Nenhum equipamento encontrado.</p>
        @endif
    </div>
@endsection
