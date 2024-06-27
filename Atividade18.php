<?php

class Usuario{

    //Atributos da classe
    public $nome;
    protected $cpf;
    private $endereco;

    //construtor de classe
    function Usuario(){
        $this->preparaUsuario();
    }
    //Métodos
    private function preparaUsuario(){
        $this->nome = "Leonardo";
        $this->cpf = "99999999";
        $this->endereco = "Rua Fulano de Tal número 0";
    }
    public function getcpf (){
        return $this->cpf;
    }
    public function getNome (){
        return $this->nome;
    }
    function getendereco (){
        return $this->endereco;
    }
}
//Instaciando o objeto e acesando seus respectivos métodos
$usu = new Usuario();

$usu->getCpf();

$usu->getNome();

?>