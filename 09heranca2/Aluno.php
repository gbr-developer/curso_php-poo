<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
//Classe para diferença
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function __construct($nome, $idade, $sexo, $curso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setMatricula(rand(1, 1000));
        $this->setCurso($curso);
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matr){
        $this->matricula = $matr;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
    
    public function PagarMensalidade(){
        echo "<p>Sua mensalidade foi paga, {$this->getNome()}!</p>";
    }
}
