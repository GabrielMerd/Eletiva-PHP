<?php

abstract class Telefone {
    private $ddd;
    private $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd() {
        return $this->ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

    abstract public function calculaCusto($tempo);
}

class Fixo extends Telefone {
    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function getCustoPorMinuto() {
        return $this->custoPorMinuto;
    }

    public function setCustoPorMinuto($custoPorMinuto) {
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}

abstract class Celular extends Telefone {
    private $custoMinutoBase;
    private $nomeOperadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero);
        $this->custoMinutoBase = $custoMinutoBase;
        $this->nomeOperadora = $nomeOperadora;
    }

    public function getCustoMinutoBase() {
        return $this->custoMinutoBase;
    }

    public function setCustoMinutoBase($custoMinutoBase) {
        $this->custoMinutoBase = $custoMinutoBase;
    }

    public function getNomeOperadora() {
        return $this->nomeOperadora;
    }

    public function setNomeOperadora($nomeOperadora) {
        $this->nomeOperadora = $nomeOperadora;
    }
}

class PrePago extends Celular {
    public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custo = $this->getCustoMinutoBase() * 1.40;  // Aplica um acréscimo de 40% no custo base
        return $custo * $tempo;
    }
}

class PosPago extends Celular {
    public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero, $custoMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custo = $this->getCustoMinutoBase() * 0.90;  // Aplica um desconto de 10% no custo base
        return $custo * $tempo;
    }
}

// Exemplo de uso:
$telefoneFixo = new Fixo('11', '39911111', 0.5);
$celularPrePago = new PrePago('21', '987654321', 0.3, 'TIM');
$celularPosPago = new PosPago('31', '564738291', 0.4, 'CORREIOS');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Telefones</title>
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
        <!-- Card para o telefone fixo -->
        <div class="card">
            <h2>Telefone Fixo</h2>
            <p><span>DDD:</span> <?php echo $telefoneFixo->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $telefoneFixo->getNumero(); ?></p>
            <p><span>Custo por Minuto:</span> <?php echo $telefoneFixo->getCustoPorMinuto(); ?> </p>
            <p><span>Custo da Ligação (10 min):</span> <?php echo $telefoneFixo->calculaCusto(10); ?></p>
        </div>

        <!-- Card para o celular pré-pago -->
        <div class="card">
            <h2>Celular Pré-Pago</h2>
            <p><span>DDD:</span> <?php echo $celularPrePago->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $celularPrePago->getNumero(); ?></p>
            <p><span>Operadora:</span> <?php echo $celularPrePago->getNomeOperadora(); ?></p>
            <p><span>Custo por Minuto Base:</span> <?php echo $celularPrePago->getCustoMinutoBase(); ?></p>
            <p><span>Custo da Ligação (10 min):</span> <?php echo $celularPrePago->calculaCusto(10); ?></p>
        </div>

        <!-- Card para o celular pós-pago -->
        <div class="card">
            <h2>Celular Pós-Pago</h2>
            <p><span>DDD:</span> <?php echo $celularPosPago->getDdd(); ?></p>
            <p><span>Número:</span> <?php echo $celularPosPago->getNumero(); ?></p>
            <p><span>Operadora:</span> <?php echo $celularPosPago->getNomeOperadora(); ?></p>
            <p><span>Custo por Minuto Base:</span> <?php echo $celularPosPago->getCustoMinutoBase(); ?></p>
            <p><span>Custo da Ligação (10 min):</span> <?php echo $celularPosPago->calculaCusto(10); ?></p>
        </div>
    </div>

</body>
</html>
