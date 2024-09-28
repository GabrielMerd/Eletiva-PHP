@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Manutenção</h1>

    <form action="{{ route('manutencoes.update', $maintenance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="equipment_id">Equipamento</label>
            <select name="equipamento_id" id="equipamento_id" class="form-control">
                @foreach($equipamentos as $equipamento)
                    <option value="{{ $equipamento->id }}" {{ $equipamento->id == $maintenance->equipamento_id ? 'selected' : '' }}>
                        {{ $equipamento->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Data de Início</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $manutencaos->start_date }}">
        </div>

        <div class="form-group">
            <label for="end_date">Data Prevista para Término</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $maintenance->end_date }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
