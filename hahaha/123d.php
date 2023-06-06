<?php

class Conta {
    public $numero;
    public $banco;
    public $saldo;
    
    public function __construct($numero, $banco, $saldo) {
        $this->numero = $numero;
        $this->banco = $banco;
        $this->saldo = $saldo;
    }
    
    public function depositar($valor) {
        $this->saldo += $valor;
    }
    
    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente.";
        }
    }
}


if (isset($_POST['submit'])) {
    
    $numeroConta = $_POST['numero'];
    $valorDeposito = $_POST['deposito'];
    $valorSaque = $_POST['saque'];
    
    
    $conta = new Conta($numeroConta, 1234, 0);
    
    
    if (!empty($valorDeposito)) {
        $conta->depositar($valorDeposito);
    }
    
    
    if (!empty($valorSaque)) {
        $conta->sacar($valorSaque);
    }
    
   
    echo "Saldo atual: " . $conta->saldo;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário da Conta</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Número da Conta:</label>
        <input type="text" name="numero" id="numero" required><br><br>
        
        <label for="deposito">Valor para Depósito:</label>
        <input type="number" name="deposito" id="deposito"><br><br>
        
        <label for="saque">Valor para Saque:</label>
        <input type="number" name="saque" id="saque"><br><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
