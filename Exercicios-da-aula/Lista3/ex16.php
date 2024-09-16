<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<body>
    <h2>Calculadora de Desconto</h2>
    <form action="" method="post">
        <label for="preco">Digite o preço original:</label>
        <input type="number" name="preco" id="preco" step="0.01" required><br><br>

        <label for="desconto">Digite o percentual de desconto:</label>
        <input type="number" name="desconto" id="desconto" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Preço com Desconto">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém o preço e o percentual de desconto do formulário
            $preco = $_POST['preco'];
            $desconto = $_POST['desconto'];

            // Calcula o valor do desconto
            $valor_desconto = ($desconto / 100) * $preco;

            // Calcula o preço com desconto
            $preco_com_desconto = $preco - $valor_desconto;

            // Exibe o resultado
            echo "<h3>O preço com desconto é: " . number_format($preco_com_desconto, 2) . "</h3>";
        }
    ?>
</body>
</html>
