<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    protected $corPelo;
    
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }


}
