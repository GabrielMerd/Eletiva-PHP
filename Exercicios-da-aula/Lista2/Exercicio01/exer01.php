<?php

class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getX() {
        return $this->x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getY() {
        return $this->y;
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function toString() {
        return "(" . $this->x . ", " . $this->y . ")";
    }

    public static function getContador() {
        return self::$contador;
    }

    public function distancia(Ponto $outroPonto) {
        $dx = $this->x - $outroPonto->getX();
        $dy = $this->y - $outroPonto->getY();
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public function distanciaCoordenadas($x, $y) {
        $dx = $this->x - $x;
        $dy = $this->y - $y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public static function distanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
}

$p1 = new Ponto(3, 4);
$p2 = new Ponto(6, 8);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Ponto</title>
    <style>
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            background-color: #f5f5f5;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        .card p span {
            font-weight: bold;
            color: #000;
        }

        
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Ponto 1</h2>
            <p><span>Coordenadas:</span> <?php echo $p1->toString(); ?></p>
            <p><span>Distância até (0, 0):</span> <?php echo number_format($p1->distanciaCoordenadas(0, 0), 2); ?></p>
        </div>

        <div class="card">
            <h2>Ponto 2</h2>
            <p><span>Coordenadas:</span> <?php echo $p2->toString(); ?></p>
            <p><span>Distância até (0, 0):</span> <?php echo number_format($p2->distanciaCoordenadas(0, 0), 2); ?></p>
        </div>

        <div class="card">
            <h2>Distância entre P1 e P2</h2>
            <p><?php echo number_format($p1->distancia($p2), 2); ?></p>
        </div>

        <div class="card">
            <h2>Total de Pontos Criados</h2>
            <p><?php echo Ponto::getContador(); ?></p>
        </div>
    </div>

</body>
</html>
