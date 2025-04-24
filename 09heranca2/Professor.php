<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
//Herança para diferença
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    public function __construct($nome, $idade, $sexo, $esp, $sal) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setEspecialidade($esp);
        $this->setSalario($sal);
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($esp){
        $this->especialidade = $esp;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($sal){
        $this->salario = $sal;
    }
    public function receberAumento($aum){
        $this->setSalario($this->getSalario() + $aum);
    }
}
