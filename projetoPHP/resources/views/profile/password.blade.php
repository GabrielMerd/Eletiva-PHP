@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0">Alterar Senha</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.updatePassword') }}">
                        @csrf
                        @method('PATCH')

                        <!-- Senha Atual -->
                        <div class="form-group mb-4">
                            <label for="current_password">Senha Atual</label>
                            <input type="password" name="current_password" id="current_password" class="form-control" required>
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nova Senha -->
                        <div class="form-group mb-4">
                            <label for="password">Nova Senha</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirmar Senha -->
                        <div class="form-group mb-4">
                            <label for="password_confirmation">Confirmar Nova Senha</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <!-- Botões -->
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Alterar Senha</button>
                            <a href="{{ route('profile.show') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
