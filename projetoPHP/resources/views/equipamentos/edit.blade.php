@extends('layouts.app')

@section('title', 'Editar Equipamento')

@section('content')
    <div class="container">
        <h1 class="text-center">Editar Equipamento</h1>

        <form action="{{ route('equipamentos.update', $equipamento->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $equipamento->nome }}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" required>{{ $equipamento->descricao }}</textarea>
            </div>

            <div class="form-group">
                <label for="marca">Marca Existente:</label>
                <select name="marca_id" class="form-control">
                    <option value="">Selecione uma marca existente</option>
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ $equipamento->marca_id == $marca->id ? 'selected' : '' }}>
                            {{ $marca->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nova_marca">Ou Adicionar Nova Marca:</label>
                <input type="text" name="nova_marca" class="form-control" placeholder="Digite a nova marca">
            </div>


            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select name="categoria_id" class="form-control" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $equipamento->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
        </form>
    </div>
@endsection
