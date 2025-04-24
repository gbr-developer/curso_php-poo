<?php

class Caneta { 
    public $modelo; //Atributo público
    public $cor;
    private $ponta; //Atributo privado
    protected $carga;
    protected $tampada; //Atributo protegido

    public function rabiscar(){ //Método público
        if ($this->tampada == true) {
            echo "<p>Erro! Não posso rabiscar</p>";
        } else {
        echo "<p>Estou rabiscando...</p>";
        }
    }
    public function tampar(){ //Método público pode dar acesso a um atributo protegido sem problemas
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
