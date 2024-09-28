<section class="my-5">
    <div class="container">
        <!-- Header Section -->
        <header>
            <h2 class="text-lg fw-medium text-dark">
                Informações do Perfil
            </h2>
            <p class="mt-1 text-sm text-muted">
                Atualize as informações do perfil da sua conta e endereço de e-mail.
            </p>
        </header>

        <!-- Formulário de Verificação de Email -->
        <form id="send-verification" method="post" action="/verificacao-email">
            <?php echo csrf_field(); ?>
        </form>

        <!-- Formulário de Atualização do Perfil -->
        <form method="post" action="/profile" class="mt-4">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>" required autofocus autocomplete="name">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" required autocomplete="username">
                
                <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div class="mt-3">
                    <p class="text-sm text-muted">
                        O endereço de email não está verificado.
                        <button form="send-verification" class="btn btn-link p-0 text-primary">
                            Clique aqui para reenviar o e-mail de verificação.
                        </button>
                    </p>

                    <?php if(session('status') === 'verification-link-sent'): ?>
                    <p class="text-success mt-2" id="verification-sent" style="display: none;">
                        Um novo link de verificação foi enviado para o seu e-mail.
                    </p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Botão Salvar -->
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Salvar</button>

                <?php if(session('status') === 'profile-updated'): ?>
                <p class="text-success mt-3" id="profile-updated" style="display: none;">
                    Perfil atualizado com sucesso.
                </p>
                <?php endif; ?>
            </div>
        </form>
    </div>
</section>
<?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>