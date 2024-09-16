<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Retângulo</title>
</head>
<body>
    <h2>Formulário de Cálculo da Área do Retângulo</h2>
    <form action="" method="post">
        <label for="largura">Digite a largura do retângulo:</label>
        <input type="number" name="largura" id="largura" step="0.01" required><br><br>

        <label for="altura">Digite a altura do retângulo:</label>
        <input type="number" name="altura" id="altura" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Área">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém a largura e a altura do retângulo do formulário
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];

            // Calcula a área do retângulo
            $area = $largura * $altura;

            // Exibe o resultado
            echo "<h3>A área do retângulo é: $area</h3>";
        }
    ?>
</body>
</html>
