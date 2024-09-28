

<?php $__env->startSection('title', 'Cadastrar Nova Categoria'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Cadastrar Nova Categoria</h1>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('categoria.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da categoria" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Salvar Categoria</button>
                    <a href="<?php echo e(route('categoria.index')); ?>" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/categoria/create.blade.php ENDPATH**/ ?>