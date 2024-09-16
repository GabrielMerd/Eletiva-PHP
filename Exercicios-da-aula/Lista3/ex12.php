<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenciação</title>
</head>
<body>
    <h2>Cálculo de Potência</h2>
    <form action="" method="post">
        <label for="base">Digite a base:</label>
        <input type="number" name="base" id="base" step="0.01" required><br><br>

        <label for="expoente">Digite o expoente:</label>
        <input type="number" name="expoente" id="expoente" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Potência">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém a base e o expoente do formulário
            $base = $_POST['base'];
            $expoente = $_POST['expoente'];

            // Calcula a base elevada ao expoente
            $resultado = pow($base, $expoente);

            // Exibe o resultado
            echo "<h3>Resultado: " . number_format($resultado, 2) . "</h3>";
        }
    ?>
</body>
</html>
