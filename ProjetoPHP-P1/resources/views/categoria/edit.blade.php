@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Categoria</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="{{ $categoria->nome }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Atualizar Categoria</button>
                    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
