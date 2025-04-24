<?php
interface publicacao {
    public function abrir();
    public function fechar();
    public function folhear($atual);
    public function avançarPag();
    public function voltarPag();
}
