<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Velocidade Média</title>
</head>
<body>
    <h2>Cálculo da Velocidade Média</h2>
    <form action="" method="post">
        <label for="distancia">Digite a distância (em quilômetros):</label>
        <input type="number" name="distancia" id="distancia" step="0.01" required><br><br>

        <label for="tempo">Digite o tempo (em horas):</label>
        <input type="number" name="tempo" id="tempo" step="0.01" required><br><br>

        <input type="submit" name="submit" value="Calcular Velocidade Média">
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if (isset($_POST['submit'])) {
            // Obtém a distância e o tempo do formulário
            $distancia = $_POST['distancia'];
            $tempo = $_POST['tempo'];

            // Verifica se o tempo é diferente de zero para evitar divisão por zero
            if ($tempo > 0) {
                // Calcula a velocidade média (distância / tempo)
                $velocidade_media = $distancia / $tempo;

                // Exibe o resultado
                echo "<h3>A velocidade média é: " . number_format($velocidade_media, 2) . " km/h</h3>";
            } else {
                // Mensagem de erro se o tempo for zero ou negativo
                echo "<h3>Erro: O tempo deve ser maior que zero.</h3>";
            }
        }
    ?>
</body>
</html>
