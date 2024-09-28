@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Perfil de {{ $user->name }}</h3>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Editar Perfil</a>
                </div>
                <div class="card-body">
                    <!-- Informações do Perfil -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Nome Completo:</h5>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Email:</h5>
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>

                    <!-- Opção para Alterar Senha -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <a href="{{ route('profile.password') }}" class="btn btn-warning btn-block">Alterar Senha</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
