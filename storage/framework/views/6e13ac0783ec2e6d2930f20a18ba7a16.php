

<?php $__env->startSection('title', 'Detalhes do Equipamento'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h1 class="text-center"><?php echo e($equipamento->nome); ?></h1>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> <?php echo e($equipamento->descricao); ?></p>
            <div class="d-flex justify-content-between mt-4">
                <a href="<?php echo e(route('equipamentos.edit', $equipamento->id)); ?>" class="btn btn-warning">Editar</a>
                <form action="<?php echo e(route('equipamentos.destroy', $equipamento->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\EletivaII-22024-main\projetobd-gabriel\resources\views/equipamentos/show.blade.php ENDPATH**/ ?>