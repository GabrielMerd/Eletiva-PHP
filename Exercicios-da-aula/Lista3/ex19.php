<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Dias</title>
</head>
<body>
    <h2>Conversão de Dias para Horas, Minutos e Segundos</h2>
    <form action="" method="post">
        <label for="dias">Digite o valor em dias:</label>
        <input type="number" name="dias" id="dias" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o valor em dias do formulário
            $dias = $_POST['dias'];

            // Converte dias para horas, minutos e segundos
            $horas = $dias * 24;
            $minutos = $horas * 60;
            $segundos = $minutos * 60;

            // Exibe o resultado
            echo "<h3>O valor em horas é: " . number_format($horas, 2) . " h</h3>";
            echo "<h3>O valor em minutos é: " . number_format($minutos, 2) . " min</h3>";
            echo "<h3>O valor em segundos é: " . number_format($segundos, 2) . " s</h3>";
        }
    ?>
</body>
</html>
