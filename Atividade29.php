<?php 
class pessoa{
    //propriedades da classe pessoa
    protected $nome;
    protected $idade;
//construtor da classe pessoa
public function __construct($nome, $idade){
$this->nome = $nome;
$this->idade = $idade;
}
//Método para exibir informações da pessoa
public function exibirInformacoes(){
    echo "Nome:" .$this->nome."<br>";
    echo "idade:" .$this->idade."<br>";
}
}
?>