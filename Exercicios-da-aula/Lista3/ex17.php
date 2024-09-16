<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros Simples</title>
</head>
<body>
    <h2>Cálculo de Juros Simples</h2>
    <form action="" method="post">
        <label for="capital">Digite o capital:</label>
        <input type="number" name="capital" id="capital" step="0.01" required><br><br>

        <label for="taxa">Digite a taxa de juros (em %):</label>
        <input type="number" name="taxa" id="taxa" step="0.01" required><br><br>

        <label for="periodo">Digite o período (em anos):</label>
        <input type="number" name="periodo" id="periodo" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Juros Simples">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o capital, a taxa e o período do formulário
            $capital = $_POST['capital'];
            $taxa = $_POST['taxa'];
            $periodo = $_POST['periodo'];

            // Calcula os juros simples (capital * taxa * período)
            $juros_simples = ($capital * ($taxa / 100) * $periodo);

            // Exibe o resultado
            echo "<h3>Os juros simples são: " . number_format($juros_simples, 2) . "</h3>";
        }
    ?>
</body>
</html>
