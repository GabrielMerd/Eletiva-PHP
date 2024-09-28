@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Equipamento</h1>
        <form action="{{ route('equipamentos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome do Equipamento</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>

            <div class="form-group">
                <label for="marca">Marca Existente:</label>
                <select name="marca_id" id="marca_id" class="form-control">
                    <option value="">Selecione uma marca existente</option>
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nova_marca">Ou Adicionar Nova Marca:</label>
                <input type="text" name="nova_marca" id="nova_marca" class="form-control" placeholder="Digite a nova marca">
            </div>

            <!-- Select para categorias -->
            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select class="form-control" id="categoria_id" name="categoria_id" required>
                    <option value="" disabled selected>Escolha uma categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Criar Equipamento</button>
        </form>
    </div>

    <script>
        document.getElementById('marca_id').addEventListener('change', function() {
            var marcaInput = document.getElementById('nova_marca');
            if (this.value !== "") {
                marcaInput.disabled = true;
                marcaInput.value = '';  // Limpar o campo de nova marca se uma marca existente for selecionada
            } else {
                marcaInput.disabled = false;
            }
        });
    </script>
@endsection
