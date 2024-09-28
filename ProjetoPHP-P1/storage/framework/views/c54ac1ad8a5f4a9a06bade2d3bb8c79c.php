

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Manutenção</h1>

    <form action="<?php echo e(route('manutencoes.update', $maintenance->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="equipment_id">Equipamento</label>
            <select name="equipamento_id" id="equipamento_id" class="form-control">
                <?php $__currentLoopData = $equipamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($equipamento->id); ?>" <?php echo e($equipamento->id == $maintenance->equipamento_id ? 'selected' : ''); ?>>
                        <?php echo e($equipamento->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Data de Início</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo e($manutencaos->start_date); ?>">
        </div>

        <div class="form-group">
            <label for="end_date">Data Prevista para Término</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo e($maintenance->end_date); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/manutencaos/edit.blade.php ENDPATH**/ ?>