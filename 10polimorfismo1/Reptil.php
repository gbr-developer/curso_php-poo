<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom(){
        echo "<p>Som de réptil</p>";
    }
    
    public function __construct($peso, $idade, $membros, $cor) {
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
