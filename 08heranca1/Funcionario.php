<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
class Funcionario extends Pessoa{
    //Atributos
    private $setor;
    private $trabalhando;
    
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $setor) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setSetor($setor);
        $this->setTrabalhando(true);
    }
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($trab){
        $this->trabalhando = $trab;
    }
    //Métodos
    public function mudarTrabalho($setor){
        $this->setSetor($setor);
        echo "<p>{$this->getNome()}, seu novo trabalho é $setor}</p>";
    }
}
