

<?php $__env->startSection('title', 'Lista de Categorias'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between mb-4">
        <h1 class="text-center">Lista de Categorias</h1>
        <a href="<?php echo e(route('categoria.create')); ?>" class="btn btn-primary">Cadastrar Nova Categoria</a>
    </div>

    <?php if($categorias->isEmpty()): ?>
        <p class="text-center">Nenhuma categoria cadastrada.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($categoria->nome); ?></td>
                            <td class="d-flex">
                                <a href="<?php echo e(route('categoria.edit', $categoria->id)); ?>" class="btn btn-warning me-2">Editar</a>
                                <form action="<?php echo e(route('categoria.destroy', $categoria->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/categoria/index.blade.php ENDPATH**/ ?>