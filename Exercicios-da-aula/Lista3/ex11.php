<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Perímetro do Círculo</title>
</head>
<body>
    <h2>Formulário de Cálculo do Perímetro do Círculo</h2>
    <form action="" method="post">
        <label for="raio">Digite o raio do círculo:</label>
        <input type="number" name="raio" id="raio" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Perímetro">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o raio do círculo do formulário
            $raio = $_POST['raio'];

            // Calcula o perímetro do círculo (2πr)
            $perimetro = 2 * pi() * $raio;

            // Exibe o resultado
            echo "<h3>O perímetro do círculo é: " . number_format($perimetro, 2) . "</h3>";
        }
    ?>
</body>
</html>
