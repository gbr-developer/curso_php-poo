<?php
require_once 'Controlador.php';//Reqere o arquivo da interface
class ControleRemoto implements Controlador { //Classe implementa a interface
    //Atributos
    private $volume; // Todos os tributos de um classe com interface devem ser privados
    private $ligado;
    private $tocando;
    
    //Métodos Especiais
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    public function getVolume(){
        return $this->volume;
    }
    public function setVolume($volume){
        $this->volume = $volume;
    }
    public function getLigado(){
        return $this->ligado;
    }
    public function setLigado($ligado){
        $this->ligado = $ligado;
    }
    public function getTocando(){
        return $this->tocando;
    }
    public function setTocando($tocando){
        $this->tocando = $tocando;
    }
    
    //Métodos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<p>Está ligado? ".($this->getLigado()?"SIM":"NÃO")."</p>";
        echo "<p>Está tocando? ".($this->getTocando()?"SIM":"NÃO")."</p>";
        echo "<br>volume: ";
        for ($i=0; $i < $this->getVolume(); $i+=10){
            echo "|";
        }
    }
    public function fecharMenu(){
        echo "<p>Fechando Menu...</p>";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>Erro: Você não pode aumentar o volume com a TV desligada</p>";
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>Erro: Você não pode diminuir o volume com a TV desligada</p>";
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
