<?php 
require_once 'Funcionario.php';

//Cria uma instância da classe Funcionario
$funcionario = new Funcionario("Diego", 30 , 5000);
//Exibe as informações do funcionario
$funcionario->exibirInformacoes();

?>