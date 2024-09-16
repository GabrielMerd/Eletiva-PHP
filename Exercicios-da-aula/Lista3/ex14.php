<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Quilômetros para Milhas</title>
</head>
<body>
    <h2>Conversão de Quilômetros para Milhas</h2>
    <form action="" method="post">
        <label for="quilibrio">Digite o valor em quilômetros:</label>
        <input type="number" name="quilometros" id="quilometros" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o valor em quilômetros do formulário
            $quilometros = $_POST['quilometros'];

            // Converte quilômetros para milhas (1 quilômetro = 0.621371 milhas)
            $milhas = $quilometros * 0.621371;

            // Exibe o resultado
            echo "<h3>O valor em milhas é: " . number_format($milhas, 4) . " mi</h3>";
        }
    ?>
</body>
</html>
