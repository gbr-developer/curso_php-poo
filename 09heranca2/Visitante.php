<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
//Herança de Implementação
class Visitante extends Pessoa{
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
}
