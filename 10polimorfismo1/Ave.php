<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function locomover(){
        echo "<p>Voando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom(){
        echo "<p>Som de ave</p>";
    }
    public function fazerNinho(){
        echo "<p>Construiu um ninho</p>";
    }
    
    public function __construct($peso, $idade, $membros, $cor){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPena($cor);
    }
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($cor){
        $this->corPena = $cor;
    }
}
