

<?php $__env->startSection('title', 'Editar Categoria'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Categoria</h1>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('categoria.update', $categoria->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo e($categoria->nome); ?>" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Atualizar Categoria</button>
                    <a href="<?php echo e(route('categoria.index')); ?>" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/categoria/edit.blade.php ENDPATH**/ ?>