<?php
require_once 'Aluno.php';
//Subclasse de Aluno | Descedente de Pessoa
class Bolsista extends Aluno{
   private $bolsa;
   
   public function __construct($nome, $idade, $sexo, $curso, $bolsa) {
       $this->setNome($nome);
       $this->setIdade($idade);
       $this->setSexo($sexo);
       $this->setCurso($curso);
       $this->setMatricula(rand(1,1000));
       $this->setBolsa($bolsa);
   }
   public function getBolsa(){
       return $this->bolsa;
   }
   public function setBolsa($bolsa){
       $this->bolsa = $bolsa;
   }
   public function renovarBolsa(){
       echo "{$this->getNome()}, sua matrícula foi renovada!";
   }
   public function pagarMensalidade(){//Sobrepõe o método de aluno
       echo "{$this->getNome()}, sua mensalidade foi paga com {$this->getBolsa()}% de desconto!";
   }
}
