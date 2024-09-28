

<?php $__env->startSection('title', 'Editar Equipamento'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Editar Equipamento</h1>

        <form action="<?php echo e(route('equipamentos.update', $equipamento->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?php echo e($equipamento->nome); ?>" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" required><?php echo e($equipamento->descricao); ?></textarea>
            </div>

            <div class="form-group">
                <label for="marca">Marca Existente:</label>
                <select name="marca_id" class="form-control">
                    <option value="">Selecione uma marca existente</option>
                    <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($marca->id); ?>" <?php echo e($equipamento->marca_id == $marca->id ? 'selected' : ''); ?>>
                            <?php echo e($marca->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nova_marca">Ou Adicionar Nova Marca:</label>
                <input type="text" name="nova_marca" class="form-control" placeholder="Digite a nova marca">
            </div>


            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select name="categoria_id" class="form-control" required>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoria->id); ?>" <?php echo e($equipamento->categoria_id == $categoria->id ? 'selected' : ''); ?>>
                            <?php echo e($categoria->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\projetobd\resources\views/equipamentos/edit.blade.php ENDPATH**/ ?>