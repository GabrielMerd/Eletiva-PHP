@extends('layouts.app')

@section('title', 'Detalhes do Equipamento')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">{{ $equipamento->nome }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $equipamento->descricao }}</p>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
@endsection
