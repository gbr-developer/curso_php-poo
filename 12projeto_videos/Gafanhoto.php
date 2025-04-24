<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;
    
    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }
    
    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);//Chama e executa o método construtor da Superclasse
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($tot){
        $this->totAssistido = $tot;
    }
}
