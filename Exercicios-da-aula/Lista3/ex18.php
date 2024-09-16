<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Compostos</title>
</head>
<body>
    <h2>Cálculo de Juros Compostos</h2>
    <form action="" method="post">
        <label for="capital">Digite o capital:</label>
        <input type="number" name="capital" id="capital" step="0.01" required><br><br>

        <label for="taxa">Digite a taxa de juros (em %):</label>
        <input type="number" name="taxa" id="taxa" step="0.01" required><br><br>

        <label for="periodo">Digite o período (em anos):</label>
        <input type="number" name="periodo" id="periodo" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Montante">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o capital, a taxa e o período do formulário
            $capital = $_POST['capital'];
            $taxa = $_POST['taxa'] / 100; // Converte a taxa de percentual para decimal
            $periodo = $_POST['periodo'];

            // Calcula o montante com juros compostos (capital * (1 + taxa) ^ período)
            $montante = $capital * pow((1 + $taxa), $periodo);

            // Exibe o resultado
            echo "<h3>O montante com juros compostos é: " . number_format($montante, 2) . "</h3>";
        }
    ?>
</body>
</html>
