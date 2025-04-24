<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao{
    private $espectador;
    private $filme;
    
    public function avaliar(){
        $this->getFilme()->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->getFilme()->setAvaliacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50){
            $nova = 5;
        } elseif ($porc <= 90){
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->getFilme()->setAvaliacao($nova);
    }
    
    public function __construct($espec, $filme) {
        $this->setEspectador($espec);
        $this->setFilme($filme);
        $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espec){
        $this->espectador = $espec;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
}
