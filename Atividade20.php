<?php
 abstract class Conta{
    public $saldo =0;

    abstract function depositar($valor);

    abstract function sacar($valor);
}

class ContaCorrente extends conta {

    function depositar($valor){
        $this->saldo += $valor;
    }
    function sacar($valor) {
        $this->saldo -= $valor;
    }
    function transferir($contaDestino, $valor){
        $this->saldo-= $valor;
    }
}

$novaconta1 = new ContaCorrente();

$novaconta2 = new Contacorrente();

$novaconta1->transferir('xxx-xxx', 500);

$novaconta2->depositar(500);

echo "Saldo:". $novaconta1->saldo;

echo "Saldo:". $novaconta2->saldo;

?>