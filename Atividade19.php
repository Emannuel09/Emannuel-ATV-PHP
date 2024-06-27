<?php
class Conta{

    public $saldo =0;

    function depositar($valor) {
        $this->saldo += $valor;
    }

    function sacar($valor) {
        $this->saldo -= $valor;
    }
}

class contacorrente extends Conta {

    function transferir($contadestino, $valor){
        $this->saldo -= $valor;
    }
}

$novaconta1 = new ContaCorrente();

$novaconta2 = new contacorrente();

$novaconta1->transferir('xxx-xxx', 500);

$novaconta2->depositar(500);

echo "saldo:".$novaconta1->saldo;

echo "saldo:". $novaconta2->saldo;

?>