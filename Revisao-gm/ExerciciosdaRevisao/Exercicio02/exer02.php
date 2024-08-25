<?php require("cabecalho.php"); ?>

<h1>Exercício 02</h1>

<form action="exer02.php" method="post"> <div class="row"> <div class="col">
<label for="hora_inicial" class="form-label"> Informe a hora inicial: </label>
<input type="time" name="hora_inicial" id="hora_inicial" class="form-control"/>
</div>

<div class="col"> <label for="hora_final" class="form-label"> Informe a hora final: </label>
<input type="time" name="hora_final" id="hora_final" class="form-control"/>
</div> </div>

<div class="row"> <div class="col"> <button type="submit" class="btn btn-danger">Calcular Salário Semanal</button>
</div> </div> </form>

<?php
if ($_POST) {
   $hora_inicial = new DateTime($_POST['hora_inicial']);

   $hora_final = new DateTime($_POST['hora_final']);

   $diferenca = $hora_final->diff($hora_inicial);

   $valorHora = 20; // 
   $horasTrabalhadas = $diferenca->h + ($diferenca->i / 60); // 
   $salarioSemanal = $horasTrabalhadas * $valorHora;
   echo "Salário Semanal: R$ " . number_format($salarioSemanal, 2, ',', '.') . "<br>";
}
require("rodape.php");
?>