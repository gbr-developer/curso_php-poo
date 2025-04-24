<?php
//Código da interface
interface Controlador { //Criação de uma interface
    public function ligar(); //Definição de métodos abstratos
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
