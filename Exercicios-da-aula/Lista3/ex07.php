<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Fahrenheit para Celsius</title>
</head>
<body>
    <h2>Conversão de Fahrenheit para Celsius</h2>
    <form action="" method="post">
        <label for="fahrenheit">Digite a temperatura em Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém a temperatura em Fahrenheit do formulário
            $fahrenheit = $_POST['fahrenheit'];

            // Converte para Celsius (C = (F - 32) * 5/9)
            $celsius = ($fahrenheit - 32) * 5/9;

            // Exibe o resultado
            echo "<h3>A temperatura em Celsius é: $celsius °C</h3>";
        }
    ?>
</body>
</html>
