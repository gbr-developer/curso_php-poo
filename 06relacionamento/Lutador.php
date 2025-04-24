<?php
require_once 'InterfaceLutador.php';
class Lutador implements InterfaceLutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria;
    private $vitorias, $derrotas, $empates;
    
    //Métodos Especiais
    public function __construct($nome, $nacio, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
        $this->setNome($nome);
        $this->setNacionalidade($nacio);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacio){
        $this->nacionalidade = $nacio;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria(); //Definição da categoria com o peso
    }
    public function getCategoria(){ 
        return $this->categoria;
    }
    private function setCategoria(){ //Método privado: só pode ser alterada pelo sistema
        if ($this->peso<52.2){ //Definições de valores para categoria com condições 
            $this->categoria = "Inválido";
        } elseif ($this->peso<=70.3){
            $this->categoria = "Leve";
        } elseif ($this->peso<=83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso<=120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
    
    //Métodos
    public function apresentar(){
        echo "<p>---------------------------------</p>";
        echo "<p>Lutador: {$this->getNome()}</p>";
        echo "<p>Origem: {$this->getNacionalidade()}</p>";
        echo "<p>Idade: {$this->getIdade()} anos</p>";
        echo "<p>Altura: {$this->getAltura()} m</p>";
        echo "<p>Peso: {$this->getPeso()} Kg</p>";
        echo "<p>Ganhou: {$this->getVitorias()}</p>";
        echo "<p>Perdeu: {$this->getDerrotas()}</p>";
        echo "<p>Empatou: {$this->getEmpates()}</p>";
        echo "<p>---------------------------------</p>";
    }
    public function status(){
        echo "<p>-----------------------------------------------</p>";
        echo "<p>{$this->getNome()} é um peso {$this->getCategoria()} com {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates!</p>";
        echo "<p>-----------------------------------------------</p>";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}
