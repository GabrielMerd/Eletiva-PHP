<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>
<body>
    <h2>Cálculo do Índice de Massa Corporal (IMC)</h2>
    <form action="" method="post">
        <label for="peso">Digite seu peso (em kg e com a virgula):</label>
        <input type="number" name="peso" id="peso" step="0.01" required><br><br>

        <label for="altura">Digite sua altura (em metros e com a virgula):</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular IMC">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o peso e a altura do formulário
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            // Verifica se a altura é diferente de zero para evitar divisão por zero
            if ($altura > 0) {
                // Calcula o IMC (peso / altura²)
                $imc = $peso / pow($altura, 2);

                // Exibe o resultado
                echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
            } else {
                // Mensagem de erro se a altura for zero ou negativa
                echo "<h3>Erro: A altura deve ser maior que zero.</h3>";
            }
        }
    ?>
</body>
</html>
