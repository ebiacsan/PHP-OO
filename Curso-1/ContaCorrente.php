<?php

class ContaCorrente{

    private $titular;
    public  $agencia;
    private $numero;
    private $saldo;

    public function __construct($titular, $agencia, $numero, $saldo){

        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero  = $numero;
        $this->saldo   = $saldo;
    }
    
    public function sacar($valor){

        $this->saldo = $this->saldo - $valor;
        
        return($this);
    }
    
    public function depositar($valor){
        
        $this->saldo = $this->saldo + $valor;
        
        return($this);
    }

    public function transferir($valor, $conta){
        
        $this->sacar($valor);

        $conta->depositar($valor);
        
        return $this;
    }

    public function __get($atributo){
        
        $this->retornaErro($atributo);
        
        return($this->$atributo);
    }

    public function __set($atributo, $valor){
        
        $this->retornaErro($atributo);
        
        $this->$atributo = $valor;
    }

    private function retornaErro($atributo){   //protege atributo()
        
        if($atributo == "titular" or $atributo == "saldo"){
            throw new Exception("Não é possível acessar esse dado! Atributo privado!");
        }
    }

    public function setNumero($numero){
        
        return($this->numero = $numero);
    }

    private function formataSaldo(){
        
        return "R$ ".number_format($this->saldo, 2,",",".");
    }

    public function getSaldo(){
        
        return $this->formataSaldo();
    }

    public function __toString(){
        
        return "O titular da conta é: ".$this->titular. "<br/> Seu saldo atual é: ".getSaldo();
    }
}