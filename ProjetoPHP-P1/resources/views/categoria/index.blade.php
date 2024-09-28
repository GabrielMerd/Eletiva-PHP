@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h1 class="text-center">Lista de Categorias</h1>
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">Cadastrar Nova Categoria</a>
    </div>

    @if($categorias->isEmpty())
        <p class="text-center">Nenhuma categoria cadastrada.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nome }}</td>
                            <td class="d-flex">
                                <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning me-2">Editar</a>
                                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
