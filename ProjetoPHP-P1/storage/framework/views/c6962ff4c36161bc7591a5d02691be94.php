<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Editar Perfil</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('profile.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>

                        <!-- Nome -->
                        <div class="form-group mb-4">
                            <label for="name" class="form-label">Nome Completo</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($user->name); ?>" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($user->email); ?>" required>
                        </div>

                        <!-- Link para Alterar Senha -->
                        <div class="form-group mb-4">
                            <a href="<?php echo e(route('profile.password')); ?>" class="btn btn-warning">Alterar Senha</a>
                        </div>

                        <!-- Botões -->
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Salvar Alterações</button>
                            <a href="<?php echo e(route('profile.show')); ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/profile/edit.blade.php ENDPATH**/ ?>