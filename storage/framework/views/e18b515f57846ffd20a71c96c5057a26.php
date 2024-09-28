

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Perfil de <?php echo e($user->name); ?></h3>
                    <a href="<?php echo e(route('profile.edit')); ?>" class="btn btn-primary">Editar Perfil</a>
                </div>
                <div class="card-body">
                    <!-- Informações do Perfil -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5>Nome Completo:</h5>
                            <p><?php echo e($user->name); ?></p>
                        </div>
                        <div class="col-md-6">
                            <h5>Email:</h5>
                            <p><?php echo e($user->email); ?></p>
                        </div>
                    </div>

                    <!-- Opção para Alterar Senha -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <a href="<?php echo e(route('profile.password')); ?>" class="btn btn-warning btn-block">Alterar Senha</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/profile/show.blade.php ENDPATH**/ ?>