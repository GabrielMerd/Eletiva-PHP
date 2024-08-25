<?php

class Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;
        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }
        return $this->salarioBase - $inss - $ir;
    }

    public function __toString() {
        return "Funcionario: " . $this->getNome() . "<br>" .
               "Codigo: " . $this->getCodigo() . "<br>" .
               "Salario Base: " . $this->getSalarioBase() . "<br>" .
               "Salario Liquido: " . $this->getSalarioLiquido() . "<br>";
    }
}


class Servente extends Funcionario {
    public function getSalarioLiquido() {
        $adicionalInsalubridade = $this->getSalarioBase() * 0.05;
        $salarioComAdicional = $this->getSalarioBase() + $adicionalInsalubridade;
        $inss = $salarioComAdicional * 0.1;
        $ir = 0.0;
        if ($salarioComAdicional > 2000.0) {
            $ir = ($salarioComAdicional - 2000.0) * 0.12;
        }
        return $salarioComAdicional - $inss - $ir;
    }
}

class Motorista extends Funcionario {
    private $numeroCarteiraMotorista;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteiraMotorista) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroCarteiraMotorista = $numeroCarteiraMotorista;
    }

    public function getNumeroCarteiraMotorista() {
        return $this->numeroCarteiraMotorista;
    }

    public function setNumeroCarteiraMotorista($numeroCarteiraMotorista) {
        $this->numeroCarteiraMotorista = $numeroCarteiraMotorista;
    }

    public function __toString() {
        return parent::__toString() .
               "Numero da Carteira de Motorista: " . $this->getNumeroCarteiraMotorista() . "<br>";
    }
}

class MestreDeObras extends Servente {
    private $numeroFuncionariosSobSupervisao;

    public function __construct($codigo, $nome, $salarioBase, $numeroFuncionariosSobSupervisao) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numeroFuncionariosSobSupervisao = $numeroFuncionariosSobSupervisao;
    }

    public function getNumeroFuncionariosSobSupervisao() {
        return $this->numeroFuncionariosSobSupervisao;
    }

    public function setNumeroFuncionariosSobSupervisao($numeroFuncionariosSobSupervisao) {
        $this->numeroFuncionariosSobSupervisao = $numeroFuncionariosSobSupervisao;
    }

    public function getSalarioLiquido() {
        $adicionalInsalubridade = $this->getSalarioBase() * 0.05;
        $adicionalGrupo = ($this->numeroFuncionariosSobSupervisao / 10) * ($this->getSalarioBase() * 0.10);
        $salarioComAdicionais = $this->getSalarioBase() + $adicionalInsalubridade + $adicionalGrupo;
        $inss = $salarioComAdicionais * 0.1;
        $ir = 0.0;
        if ($salarioComAdicionais > 2000.0) {
            $ir = ($salarioComAdicionais - 2000.0) * 0.12;
        }
        return $salarioComAdicionais - $inss - $ir;
    }

    public function __toString() {
        return parent::__toString() .
               "Numero de Funcionarios Sob Supervisao: " . $this->getNumeroFuncionariosSobSupervisao() . "<br>";
    }
}

$funcionarios = [
    new Funcionario(1, "João", 2500),
    new Servente(2, "Maria", 1500),
    new Motorista(3, "José", 3000, "123456789"),
    new MestreDeObras(4, "Carlos", 4000, 20)
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
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
        <?php foreach ($funcionarios as $funcionario): ?>
            <div class="card">
                <h2><?php echo get_class($funcionario); ?></h2>
                <?php echo nl2br($funcionario); ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
