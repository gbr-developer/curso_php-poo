<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    //Implementação dos métodos abstratos
    public function locomover(){ //Métodos sobrepostos no PHP não precisam de uma declaração para a sobreposição
        echo "<p>Correndo</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "<p>Som de mamífero</p>";
    }
    
    public function __construct($peso, $idade, $membros, $cor) {
        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPelo($cor);
    }
    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($cor){
        $this->corPelo = $cor;
    }
}
