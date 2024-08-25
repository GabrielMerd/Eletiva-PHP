<?php require("cabecalho.php"); ?>
<h1>Cálculo de Dias de Férias</h1>
<form action="exer5.php" method="post">
<div class="row">
<div class="col">
<label for="dias_trabalhados" class="form-label">
               Informe a quantidade de dias trabalhados:
</label>
<input type="number" name="dias_trabalhados" id="dias_trabalhados" class="form-control" required/>
</div>
</div>
<div class="row">
<div class="col">
<button type="submit" class="btn btn-danger">Calcular Férias</button>
</div>
</div>
</form>
<?php
if ($_POST) {
   $diasTrabalhados = intval($_POST['dias_trabalhados']);
   $diasFerias = floor($diasTrabalhados / 30);
   if ($diasFerias > 30) {
       $diasFerias = 30;
   }
   echo "O funcionário tem direito a " . $diasFerias . " dias de férias.";
}
require("rodape.php");
?>