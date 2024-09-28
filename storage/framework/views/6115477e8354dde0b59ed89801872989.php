

<?php $__env->startSection('title', 'Lista de Equipamentos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Lista de Equipamentos</h1>

        <!-- Botão de Cadastrar Novo Equipamento -->
        <div class="text-right mb-3">
            <a href="<?php echo e(route('equipamentos.create')); ?>" class="btn btn-primary">Cadastrar Novo Equipamento</a>
        </div>

        <!-- Verifica se existem equipamentos -->
        <?php if($equipamentos->count() > 0): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Marca</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $equipamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($equipamento->nome); ?></td>
                            <td><?php echo e($equipamento->descricao); ?></td>
                            <td>
                                <?php if($equipamento->marca): ?>
                                    <?php echo e($equipamento->marca->nome); ?>

                                <?php else: ?>
                                    Sem Marca
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($equipamento->categoria->nome ?? 'Sem Categoria'); ?></td>
                            <td>
                                <a href="<?php echo e(route('equipamentos.show', $equipamento->id)); ?>" class="btn btn-info">Ver</a>
                                <a href="<?php echo e(route('equipamentos.edit', $equipamento->id)); ?>" class="btn btn-warning">Editar</a>
                                <form action="<?php echo e(route('equipamentos.destroy', $equipamento->id)); ?>" method="POST" style="display:inline-block;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <!-- Mensagem se não houver equipamentos -->
            <p class="text-center">Nenhum equipamento encontrado.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/equipamentos/index.blade.php ENDPATH**/ ?>