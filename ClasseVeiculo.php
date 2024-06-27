<?php

class Veiculo {

    private $placa;
    private $marca;
    private $modelo;
    private $cor;
    private $ano;

    public function __construct($placa, $marca, $modelo, $cor, $ano) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function acelerar() {
        echo "Acelerando o veículo...\n";
    }
} 
?>

<?php


class Carro extends Veiculo {

    private $numeroPortas;

    public function __construct($placa, $marca, $modelo, $cor, $ano, $numeroPortas) {
        parent::__construct($placa, $marca, $modelo, $cor, $ano);
        $this->numeroPortas = $numeroPortas;
    }

    public function getNumeroPortas() {
        return $this->numeroPortas;
    }

    public function setNumeroPortas($numeroPortas) {
        $this->numeroPortas = $numeroPortas;
    }

    public function exibirDetalhes() {
        echo "Detalhes do Carro:\n";
        echo "Placa: " . $this->getPlaca() . "br";
        echo "Marca: " . $this->getMarca() . "br";
        echo "Modelo: " . $this->getModelo() . "br";
        echo "Cor: " . $this->getCor() . "br";
        echo "Ano: " . $this->getAno() . "br";
        echo "Número de Portas: " . $this->getNumeroPortas() . "\n";
    }

    public function acelerar() {
        echo "Acelerando o carro...br";
    }
}

class Moto extends Veiculo {

    private $cilindrada;

    public function __construct($placa, $marca, $modelo, $cor, $ano, $cilindrada) {
        parent::__construct($placa, $marca, $modelo, $cor, $ano);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function exibirDetalhes() {
        echo "Detalhes da Moto:\n";
        echo "Placa: " . $this->getPlaca() . "br";
        echo "Marca: " . $this->getMarca() . "br";
        echo "Modelo: " . $this->getModelo() . "br";
        echo "Cor: " . $this->getCor() . "br";
        echo "Ano: " . $this->getAno() . "br";
        echo "Cilindrada: " . $this->getCilindrada() . "cc";
    }

    public function acelerar() {
        echo "Acelerando a moto...br";
    }
}
?>
<?php
// Inclua aqui as definições das classes Veiculo, Carro e Moto

// Instanciando um objeto da classe Carro
$carro = new Carro('ABC1234', 'Ford', 'Fiesta', 'Prata', 2018, 4);

// Usando métodos para acessar e modificar atributos
echo "Detalhes do Carro:\n";
echo "Placa: " . $carro->getPlaca() . "\n";
echo "Marca: " . $carro->getMarca() . "\n";
echo "Modelo: " . $carro->getModelo() . "\n";
echo "Cor: " . $carro->getCor() . "\n";
echo "Ano: " . $carro->getAno() . "\n";
echo "Número de Portas: " . $carro->getNumeroPortas() . "\n";

// Chamando método específico da classe Carro
$carro->exibirDetalhes();

// Chamando método acelerar da classe Carro
$carro->acelerar();
echo "\n";

// Instanciando um objeto da classe Moto
$moto = new Moto('XYZ5678', 'Honda', 'CBR600RR', 'Vermelha', 2020, 600);

// Usando métodos para acessar e modificar atributos
echo "Detalhes da Moto:\n";
echo "Placa: " . $moto->getPlaca() . "\n";
echo "Marca: " . $moto->getMarca() . "\n";
echo "Modelo: " . $moto->getModelo() . "\n";
echo "Cor: " . $moto->getCor() . "\n";
echo "Ano: " . $moto->getAno() . "\n";
echo "Cilindrada: " . $moto->getCilindrada() . "cc\n";

// Chamando método específico da classe Moto
$moto->exibirDetalhes();

// Chamando método acelerar da classe Moto
$moto->acelerar();
?>

