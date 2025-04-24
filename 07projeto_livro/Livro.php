<?php
require_once 'publicacao.php';
require_once 'Pessoa.php';
class Livro implements publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos especiais
    public function __construct($titulo, $autor, $tot, $leitor) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setTotPaginas($tot);
        $this->setLeitor($leitor);
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($tot) {
        $this->totPaginas = $tot;
    }
    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($atual) {
        $this->pagAtual = $atual;
    }
    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
    //Métodos
    public function detalhes(){
        echo "<p>Livro: {$this->getTitulo()}. Escrito por {$this->getAutor()}</p>";
        echo "<p>Páginas: {$this->getTotPaginas()}. Página Atual: {$this->getPagAtual()}</p>";
        echo "<p>Sendo lido por: {$this->getLeitor()->getNome()}</p>";
    }
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($atual){
        if ($atual>$this->getTotPaginas()) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($atual);
        }
    }
    public function avançarPag(){
        if ($this->getPagAtual() >= $this->getTotPaginas()) {
            echo "Você já está na última página, não há mais páginas a frente!";
        } else {
            $this->setPagAtual($this->getPagAtual()+1);
        }
    }
    public function voltarPag(){
        if ($this->getPagAtual() < 1) {
            echo "Você está na primeira página, não há mais páginas anteriores";
        } else {
            $this->setPagAtual($this->getPagAtual()-1);
        }
    }
}
