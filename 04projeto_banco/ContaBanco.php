<?php
//Classe e atributos
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Métodos
    
    public function abrirConta($t, $nome){
        $this->setTipo($t);
        $this->setDono($nome);
        if ($this->getTipo() == "CC") {
            $this->setSaldo(50);
            $this->setStatus(true);
            echo "<p>Sua conta do tipo {$this->getTipo()} foi criada com sucesso e você recebeu R$ 50,00</p>";
        } elseif ($this->getTipo() == "CP"){
            $this->setSaldo(150);
            $this->setStatus(true);
            echo "<p>Sua conta do tipo {$this->getTipo()} foi criada com sucesso e você recebeu R$ 150,00</p>";
        } else {
            echo "Erro: Tipo de Conta inválido";
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Erro: Sua conta não pode ser fechada porque ainda possui um saldo</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Erro: Sua conta não pode ser fechada porque ainda possui dívidas a quitar</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Sua conta foi fechada com sucesso!</p>";
        } 
    }
    public function depositar($deposito){
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo()+$deposito);
        } else {
            echo "<p>Erro: Você não tem uma conta aberta para depositar</p>";
        }
    }
    public function sacar($saque){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $saque) {
                $this->setSaldo($this->getSaldo() - $saque);
                echo "<p>Você sacou $saque reais com sucesso e agora tem {$this->getSaldo()} na conta</p>";
            } else {
                 echo "<p>Erro: Você não pode sacar um valor maior do que o seu saldo</p>";
            }
        } else {
             echo "<p>Erro: Você não tem uma conta aberta para sacar</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getStatus()) {
            if ($this->getTipo() == "CC"){
                $v = 12;
            } else {
                $v = 20;
            }
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Erro: Você não tem saldo suficiente para pagar a mensalidade. Será descontado no próximo depósito</p>";
            }
        } else {
            echo "<p>Mensalidade não foi cobrada porque não há uma conta em aberto</p>";
        }
    }


    //Métodos Especiais (Construtores, Getters e Setters)
    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
        $this->setNumConta(rand(1, 1000));
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($num){
        $this->numConta = $num;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($nome){
        $this->dono = $nome;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public  function setSaldo($sal){
        $this->saldo = $sal;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($stat){
        $this->status = $stat;
    }
}
