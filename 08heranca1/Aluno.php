<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
class Aluno extends Pessoa{ //Classe Aluno é extendido de Pessoa (Aluno - Subclasse; Pessoa- Superclasse)
    //Atributos
    private $matricula;
    private $curso;
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $curso) {//Construct define os parâmetros de pessoa para instanciar
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(true);
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
    //Métodos
    public function CancelarMatr(){
        $this->setMatricula(false);
        echo "<p>{$this->getNome()}, sua matrícula foi cancelada com sucesso.</p>";
    }
}
