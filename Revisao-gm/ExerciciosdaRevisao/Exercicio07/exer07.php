<?php require("cabecalho.php"); ?>
<h1>Simulação de Desempenho do Projeto</h1>
<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo_finalizacao" class="form-label">
                Prazo para Finalização do Projeto (dias):
            </label>
            <input type="number" name="prazo_finalizacao" id="prazo_finalizacao" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_total" class="form-label">
                Quantidade Total de Atividades:
            </label>
            <input type="number" name="atividades_total" id="atividades_total" class="form-control" required />
        </div>
        <div class="col">
            <label for="atividades_desenvolvidas" class="form-label">
                Quantidade de Atividades Desenvolvidas:
            </label>
            <input type="number" name="atividades_desenvolvidas" id="atividades_desenvolvidas" class="form-control" required />
        </div>
        <div class="col">
            <label for="produtividade_diaria" class="form-label">
                Produtividade Diária da Equipe (atividades/dia):
            </label>
            <input type="number" name="produtividade_diaria" id="produtividade_diaria" class="form-control" required />
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-danger">Avaliar Desempenho</button>
        </div>
    </div>
</form>

<?php 
if ($_POST)
{
    $prazo_finalizacao = $_POST['prazo_finalizacao'];
    $atividades_total = $_POST['atividades_total'];
    $atividades_desenvolvidas = $_POST['atividades_desenvolvidas'];
    $produtividade_diaria = $_POST['produtividade_diaria'];

    $atividades_restantes = $atividades_total - $atividades_desenvolvidas;

    $dias_necessarios = ceil($atividades_restantes / $produtividade_diaria);

    if ($dias_necessarios <= $prazo_finalizacao) 
    {
        echo "<div class='alert alert-success'>O projeto está no prazo! Restam $atividades_restantes atividades e a equipe conseguirá concluir em $dias_necessarios dias.</div>";
    } 
    else 
    {
        echo "<div class='alert alert-danger'>O projeto está atrasado! Restam $atividades_restantes atividades e a equipe precisará de $dias_necessarios dias, excedendo o prazo de $prazo_finalizacao dias.</div>";
    }
}

require("rodape.php"); 
?>