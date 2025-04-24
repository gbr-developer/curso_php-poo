<?php

class Caneta { //Criação da classe Caneta 
    var $modelo; //Criação dos atributos
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){ //Criação do método
        if ($this->tampada == true) {//$this: se refere ao objeto instanciado que chamou o método
            echo "<p>Erro! Não posso rabiscar</p>";
        } else {
        echo "<p>Estou rabiscando...</p>";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
