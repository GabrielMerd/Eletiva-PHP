<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração de Dois Números</title>
</head>
<body>
    <h2>Formulário de Subtração</h2>
    <form action="" method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <input type="submit" name="submit" value="Subtrair">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém os valores dos números do formulário
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            // Realiza a subtração
            $resultado = $numero1 - $numero2;

            // Exibe o resultado
            echo "<h3>Resultado da subtração: $resultado</h3>";
        }
    ?>
</body>
</html>