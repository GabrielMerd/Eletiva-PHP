<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Círculo</title>
</head>
<body>
    <h2>Formulário de Cálculo da Área do Círculo</h2>
    <form action="" method="post">
        <label for="raio">Digite o raio do círculo:</label>
        <input type="number" name="raio" id="raio" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Área">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o raio do círculo do formulário
            $raio = $_POST['raio'];

            // Calcula a área do círculo (πr²)
            $area = pi() * pow($raio, 2);

            // Exibe o resultado
            echo "<h3>A área do círculo é: " . number_format($area, 2) . "</h3>";
        }
    ?>
</body>
</html>
