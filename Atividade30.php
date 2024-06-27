<?php 
require_once 'pessoa.php';

class Funcionario extends Pessoa {
    // Propriedade específica da classe Funcionario
    private $salario;

    // Construtor da classe Funcionario
    public function __construct($nome, $idade, $salario) {
        // Chama o construtor da classe pai
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }

    // Método para exibir informações do Funcionario
    public function exibirInformacoes() {
        // Chama o método exibirInformacoes da classe pai
        parent::exibirInformacoes();
        echo "Salário: " . $this->salario . "<br>";
    }
}

?>
