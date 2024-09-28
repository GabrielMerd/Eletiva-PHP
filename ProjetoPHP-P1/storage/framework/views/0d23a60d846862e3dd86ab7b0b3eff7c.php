

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h2>Registrar Nova Manutenção</h2>
        <form action="<?php echo e(route('manutencoes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="equipamento" class="form-label">Equipamento</label>
                <select class="form-select" id="equipamento" name="equipamento_id">
                    <?php $__currentLoopData = $equipamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($equipamento->id); ?>"><?php echo e($equipamento->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="data_inicio" class="form-label">Data de Início</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio">
            </div>
            <div class="mb-3">
                <label for="data_fim_prevista" class="form-label">Data Prevista para Término</label>
                <input type="date" class="form-control" id="data_fim_prevista" name="data_fim_prevista">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Manutenção</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/manutencaos/create.blade.php ENDPATH**/ ?>