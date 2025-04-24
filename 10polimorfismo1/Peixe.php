<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "<p>Nadando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom(){
        echo "<p>Peixe não emite som</p>";
    }
    public function soltarBolha(){
        echo "<p>Soltou uma bolha</p>";
    }
    
    public function __construct($peso, $idade, $membros, $cor){
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($cor);
    }
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($cor){
        $this->corEscama = $cor;
    }
}
