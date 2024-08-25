<?php require("cabecalho.php"); ?>
<h1>Atividade 6 - Estimativa de Custos do Projeto</h1>

<form action="exer6.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_previstas" class="form-label">Horas Previstas:</label>
            <input type="number" name="horas_previstas" id="horas_previstas" class="form-control" required />
        </div>
        <div class="col">
            <label for="taxa_hora" class="form-label">Taxa por Hora (R$):</label>
            <input type="number" step="0.01" name="taxa_hora" id="taxa_hora" class="form-control" required />
        </div>
        <div class="col">
            <label for="custos_adicionais" class="form-label">Custos Adicionais (R$):</label>
            <input type="number" step="0.01" name="custos_adicionais" id="custos_adicionais" class="form-control" required />
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Calcular Custos</button>
        </div>
    </div>
</form>

<?php 
if ($_POST)
{
    $horas_previstas = $_POST['horas_previstas'];
    $taxa_hora = $_POST['taxa_hora'];
    $custos_adicionais = $_POST['custos_adicionais'];

    $custo_mao_obra = $horas_previstas * $taxa_hora;

    $custo_total_projeto = $custo_mao_obra + $custos_adicionais;

    echo "<div class='alert alert-info'>Custo de Mão de Obra: R$ " . number_format($custo_mao_obra, 2, ',', '.') . "</div>";
    echo "<div class='alert alert-info'>Custo Total do Projeto: R$ " . number_format($custo_total_projeto, 2, ',', '.') . "</div>";
}

require("rodape.php"); 
?>