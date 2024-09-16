<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Metros para Centímetros</title>
</head>
<body>
    <h2>Conversão de Metros para Centímetros</h2>
    <form action="" method="post">
        <label for="metros">Digite o valor em metros:</label>
        <input type="number" name="metros" id="metros" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Converter">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o valor em metros do formulário
            $metros = $_POST['metros'];

            // Converte metros para centímetros (1 metro = 100 centímetros)
            $centimetros = $metros * 100;

            // Exibe o resultado
            echo "<h3>O valor em centímetros é: $centimetros cm</h3>";
        }
    ?>
</body>
</html>
