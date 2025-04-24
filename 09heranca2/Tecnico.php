<?php
require_once 'Aluno.php';
//Subclasse de Aluno | Descedente de Pessoa
class Tecnico {
    private $registroProfissional;
    
    public function __construct($nome, $idade, $sexo, $curso, $rp) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setMatricula(rand(1,1000));
        $this->setRegistroProfissional($rp);
    }
    public function getRegistroProfissional(){
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($rp){
        $this->registroProfissional = $rp;
    }
    
    public function praticar(){
        echo "{$this->getNome()} está praticando!";
    }
}
