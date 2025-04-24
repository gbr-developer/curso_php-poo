<?php
class Caneta {
    protected $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    private $carga;
    
    /*
        - Método construtor definido com __construct() ou NomedaClasse()
        - Também pode ser definido um método construtor sem parâmetros
    */
    public function __construct($co, $ca) { //Método construtor com parâmetros 
        $this->cor = $co;
        $this->carga = $ca;
        $this->tampar();
    }


    public function tampar(){
        $this->tampada = true;
    }
    public function getModelo(){ //Método acessor de modelo (Retorna o modelo) 
        return $this->modelo;
    }
    public function setModelo($m){ //Método modificador de modelo (define um valor par modelo)
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}
