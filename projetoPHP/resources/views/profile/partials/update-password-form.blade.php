<section class="my-5">
    <div class="container">
        <!-- Header Section -->
        <header>
            <h2 class="text-lg fw-medium text-dark">
                Atualizar Senha
            </h2>
            <p class="mt-1 text-sm text-muted">
                Garanta que sua conta esteja usando uma senha longa e aleatória para permanecer segura.
            </p>
        </header>

        <!-- Formulário de Atualização de Senha -->
        <form method="post" action="/password" class="mt-4">
            @CSRF
            @method('PUT')
            <input type="hidden" name="_method" value="PUT">

            <!-- Senha Atual -->
            <div class="mb-3">
                <label for="current_password" class="form-label">Senha Atual</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required autocomplete="current-password">
            </div>

            <!-- Nova Senha -->
            <div class="mb-3">
                <label for="new_password" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="new_password" name="password" required autocomplete="new-password">
            </div>

            <!-- Confirmação de Senha -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Botão Salvar -->
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
                @if (session('status') === 'password-updated')
                    <p class="text-success mt-3" id="success-message">
                        Senha atualizada com sucesso.
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
