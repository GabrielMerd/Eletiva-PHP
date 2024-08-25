<?php require("cabecalho.php"); ?>
<h1>Exercício 03</h1>

<?php
// Distribuição de bônus anual
echo "<h2>Distribuição de Bônus Anual</h2>";

$lucro = 5000; // Exemplo de lucro
$funcionarios = 
[
   ['nome' => 'Gabriel', 'escalafao' => 5],
   ['nome' => 'Adekunlé', 'escalafao' => 3],
   ['nome' => 'Elielberty', 'escalafao' => 1],
   ['nome' => 'Xaolin Matador de Porco', 'escalafao' => 2],
   ['nome' => 'Juvenaldo', 'escalafao' => 4],
];

$bonusDistribuido = [];
foreach ($funcionarios as $funcionario) 

{
   $percentual = 0;
   switch ($funcionario['escalafao'])
   {
       case 1:
           $percentual = 0.1;
           break;
       case 2:
           $percentual = 0.2;
           break;
       case 3:
           $percentual = 0.3;
           break;
       case 4:
           $percentual = 0.5;
           break;
       case 5:
           $percentual = 0.7;
           break;
   }

   $bonus = $lucro * $percentual;
   $bonusDistribuido[] = 
   [
       'nome' => $funcionario['nome'],
       'bonus' => $bonus
   ];
}


echo "<table class='table'>";
echo "<tr><th>Funcionário</th><th>Bônus</th></tr>";
foreach ($bonusDistribuido as $bonus) 

{
   echo "<tr>";
   echo "<td>" . $bonus['nome'] . "</td>";
   echo "<td>R$ " . number_format($bonus['bonus'], 2, ',', '.') . "</td>";
   echo "</tr>";
}

echo "</table>";
require("rodape.php");
?>