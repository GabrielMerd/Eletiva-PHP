@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Lista de Manutenções</h2>
        <a href="{{ route('manutencoes.create') }}" class="btn btn-primary mb-3">Registrar Nova Manutenção</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Equipamento</th>
                    <th>Data de Início</th>
                    <th>Data Prevista para Término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($manutencoes as $manutencao)
                    <tr>
                        <td>{{ $manutencao->equipamento->nome }}</td>
                        <td>{{ $manutencao->data_inicio }}</td>
                        <td>{{ $manutencao->data_fim_prevista }}</td>
                        <td>
                            <a href="{{ route('manutencoes.edit', $manutencao->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('manutencoes.destroy', $manutencao->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
