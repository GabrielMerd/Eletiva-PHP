<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média das Notas</title>
</head>
<body>
    <h2>Formulário de Cálculo da Média</h2>
    <form action="" method="post">
        <label for="nota1">Digite a primeira nota:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br><br>

        <label for="nota2">Digite a segunda nota:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br><br>

        <label for="nota3">Digite a terceira nota:</label>
        <input type="number" name="nota3" id="nota3" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Média">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém as três notas do formulário
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            // Calcula a média
            $media = ($nota1 + $nota2 + $nota3) / 3;

            // Exibe o resultado
            echo "<h3>Média das notas: $media</h3>";
        }
    ?>
</body>
</html>
