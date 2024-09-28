@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Registrar Nova Manutenção</h2>
        <form action="{{ route('manutencoes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="equipamento" class="form-label">Equipamento</label>
                <select class="form-select" id="equipamento" name="equipamento_id">
                    @foreach($equipamentos as $equipamento)
                        <option value="{{ $equipamento->id }}">{{ $equipamento->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data de Início</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio">
            </div>
            <div class="mb-3">
                <label for="data_fim_prevista" class="form-label">Data Prevista para Término</label>
                <input type="date" class="form-control" id="data_fim_prevista" name="data_fim_prevista">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Manutenção</button>
        </form>
    </div>
@endsection
