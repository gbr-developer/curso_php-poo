<?php
require_once 'Pessoa.php';
//Subclasse de Pessoa
class Professor extends Pessoa {
    //Atributos
    private $especialidade;
    private $salario;
    
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $espc, $sal) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setEspecialidade($espc);
        $this->setSalario($sal);
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($espc){
        $this->especialidade = $espc;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($sal){
        $this->salario = $sal;
    }
    //Métodos
    public function receberAumento($aum){
        $this->setSalario($this->getSalario() + $aum);
        echo "<p>{$this->getNome()}, você recebeu um aumento de $aum reais, e agora recebe {$this->getSalario()} reais por mês</p>";
    }
}
