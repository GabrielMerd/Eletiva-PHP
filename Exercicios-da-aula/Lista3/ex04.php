<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão de Dois Números</title>
</head>
<body>
    <h2>Formulário de Divisão</h2>
    <form action="" method="post">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" name="numero2" id="numero2" required><br><br>

        <input type="submit" name="submit" value="Dividir">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém os valores dos números do formulário
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            // Verifica se o segundo número é zero
            if ($numero2 == 0) {
                echo "<h3>Erro: Divisão por zero não é permitida!</h3>";
            } else {
                // Realiza a divisão
                $resultado = $numero1 / $numero2;
                // Exibe o resultado
                echo "<h3>Resultado da divisão: $resultado</h3>";
            }
        }
    ?>
</body>
</html>
