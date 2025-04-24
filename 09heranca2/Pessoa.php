<?php
//Superclasse abstrata
abstract class Pessoa {//Criação de uma classe abstrata
    protected $nome;//Protected permite que esta classe e suas subclasses possam acessar os atributos e métodos
    protected $idade;
    protected $sexo;
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public final function fazerAniv(){//Método final não pode gerar especializações com este método
        $this->setIdade($this->getIdade() + 1);
        echo "<p>Feliz aniversário, {$this->getNome()}! Agora você tem {$this->getIdade()} anos.</p>";
    }
}
