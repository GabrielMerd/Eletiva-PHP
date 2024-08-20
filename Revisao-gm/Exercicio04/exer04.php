<?php require("cabecalho.php"); ?>
<h1>Atividade 4</h1>

<form action="exer4.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control" required />
        </div>
        <div class="col">
            <label for="horas_tarefa" class="form-label">Total de Horas da Tarefa:</label>
            <input type="number" name="horas_tarefa" id="horas_tarefa" class="form-control" required />
        </div>
        <div class="col">
            <label for="complexidade_tarefa" class="form-label">Complexidade:</label>
            <select name="complexidade_tarefa" id="complexidade_tarefa" class="form-control" required>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
    </div>

    <h2>Dados do Funcionário</h2>
    <div class="row">
        <div class="col">
            <label for="nome_funcionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control" required />
        </div>
        <div class="col">
            <label for="horas_disponiveis" class="form-label">Total de Horas Disponíveis:</label>
            <input type="number" name="horas_disponiveis" id="horas_disponiveis" class="form-control" required />
        </div>
        <div class="col">
            <label for="nivel_experiencia" class="form-label">Nível de Experiência:</label>
            <select name="nivel_experiencia" id="nivel_experiencia" class="form-control" required>
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Verificar</button>
        </div>
    </div>
</form>

<?php 
if ($_POST){
    $nome_tarefa = $_POST['nome_tarefa'];
    $horas_tarefa = $_POST['horas_tarefa'];
    $complexidade_tarefa = $_POST['complexidade_tarefa'];
    
    $nome_funcionario = $_POST['nome_funcionario'];
    $horas_disponiveis = $_POST['horas_disponiveis'];
    $nivel_experiencia = $_POST['nivel_experiencia'];

    $pode_assumir = true;
    $mensagem = "";

    $horas_necessarias = $horas_tarefa * 1.1;
    if ($horas_disponiveis < $horas_necessarias) {
        $pode_assumir = false;
        $mensagem = "O funcionário $nome_funcionario não possui horas disponíveis suficientes para realizar a tarefa $nome_tarefa.";
    }

    if ($pode_assumir) {
        if ($nivel_experiencia == 'junior' && $complexidade_tarefa != 'baixa') {
            $pode_assumir = false;
            $mensagem = "O funcionário $nome_funcionario (Júnior) só pode assumir tarefas de complexidade baixa.";
        } elseif ($nivel_experiencia == 'pleno' && $complexidade_tarefa == 'alta') {
            $pode_assumir = false;
            $mensagem = "O funcionário $nome_funcionario (Pleno) não pode assumir tarefas de complexidade alta.";
        }
    }

    if ($pode_assumir) {
        $mensagem = "O funcionário $nome_funcionario pode assumir a tarefa $nome_tarefa.";
    }

    echo "<div class='alert alert-info'>$mensagem</div>";
}

require("rodape.php"); 
?>