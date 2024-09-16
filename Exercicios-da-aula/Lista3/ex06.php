<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Celsius para Fahrenheit</title>
</head>
<body>
    <h2>Conversão de Celsius para Fahrenheit</h2>
    <form action="" method="post">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" name="celsius" id="celsius" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém a temperatura em Celsius do formulário
            $celsius = $_POST['celsius'];

            // Converte para Fahrenheit (F = C * 9/5 + 32)
            $fahrenheit = ($celsius * 9/5) + 32;

            // Exibe o resultado
            echo "<h3>A temperatura em Fahrenheit é: $fahrenheit °F</h3>";
        }
    ?>
</body>
</html>
