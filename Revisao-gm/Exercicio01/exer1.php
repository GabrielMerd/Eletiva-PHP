<?php require("cabecalho.php"); ?>

<h1>Exercicio 01</h1>
<form action ="exer1.php" method="POST">

<div class="row">
    <div class="col">
        <label  for="hora_entrada"> Hora de Entrada</label>
        <input type="time" id="hora_entrada" name="hora_entrada" 
            class="form-cotrol" />
</div>
    <div class="col">
        <label  for="hora_saida"> Hora de Saida</label>
        <input type="time" id="hora_saida" name="hora_saida" 
            class="form-cotrol" />
</div>

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success">Calcular </button>
    </div>
</div>

</form>
<?php
    function calcularTempo($hora_entrada, $hora_saida){
        $hora_entrada = new DateTime($hora_entrada);
        $hora_saida = new DateTime($hora_saida);
        $resultado = $hora_saida->diff($hora_entrada);
        $resultado = $resultado->format("%H:%S");
        return $resultado;

    }

    if($_POST){
        $hora_entrada = $_POST['hora_entrada'];    
        $hora_saida = $_POST['hora_saida'];    
        echo calcularTempo($hora_entrada, $hora_saida);
    }


    require("rodape.php"); ?>