<?php
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    //Métodos especiais
    public function __construct($n, $i, $s) {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($i) {
        $this->idade = $i;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($s) {
        $this->sexo = $s;
    }
    //Métodos
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }
}
