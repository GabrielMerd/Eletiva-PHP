@extends('layouts.app')

@section('title', 'Cadastrar Nova Categoria')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Cadastrar Nova Categoria</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('categoria.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da categoria" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
