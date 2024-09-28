

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Criar Equipamento</h1>
        <form action="<?php echo e(route('equipamentos.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="nome">Nome do Equipamento</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>

            <div class="form-group">
                <label for="marca">Marca Existente:</label>
                <select name="marca_id" id="marca_id" class="form-control">
                    <option value="">Selecione uma marca existente</option>
                    <?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($marca->id); ?>"><?php echo e($marca->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nova_marca">Ou Adicionar Nova Marca:</label>
                <input type="text" name="nova_marca" id="nova_marca" class="form-control" placeholder="Digite a nova marca">
            </div>

            <!-- Select para categorias -->
            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select class="form-control" id="categoria_id" name="categoria_id" required>
                    <option value="" disabled selected>Escolha uma categoria</option>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Criar Equipamento</button>
        </form>
    </div>

    <script>
        document.getElementById('marca_id').addEventListener('change', function() {
            var marcaInput = document.getElementById('nova_marca');
            if (this.value !== "") {
                marcaInput.disabled = true;
                marcaInput.value = '';  // Limpar o campo de nova marca se uma marca existente for selecionada
            } else {
                marcaInput.disabled = false;
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\EletivaII-22024-main\projetobd-gabriel\resources\views/equipamentos/create.blade.php ENDPATH**/ ?>