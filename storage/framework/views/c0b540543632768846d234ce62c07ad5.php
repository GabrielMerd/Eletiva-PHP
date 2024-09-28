

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h2>Lista de Manutenções</h2>
        <a href="<?php echo e(route('manutencoes.create')); ?>" class="btn btn-primary mb-3">Registrar Nova Manutenção</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Equipamento</th>
                    <th>Data de Início</th>
                    <th>Data Prevista para Término</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $manutencoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manutencao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($manutencao->equipamento->nome); ?></td>
                        <td><?php echo e($manutencao->data_inicio); ?></td>
                        <td><?php echo e($manutencao->data_fim_prevista); ?></td>
                        <td>
                            <a href="<?php echo e(route('manutencoes.edit', $manutencao->id)); ?>" class="btn btn-warning">Editar</a>
                            <form action="<?php echo e(route('manutencoes.destroy', $manutencao->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/manutencoes/index.blade.php ENDPATH**/ ?>