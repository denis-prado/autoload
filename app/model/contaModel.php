<?php

class ContaCorrente{
    private $saldo = 0;
    private $titular = "Denis Prado";

    function depositar($valor){
        $this->saldo += $valor;
    }

    function sacar($valor){
        if($this->saldo > 0 && $this-saldo >= $valor){
            $this->saldo -= $valor;
        } else{
            echo $titular.' Seu saldo é insuficiente!';
        }
    }

    function verSaldo(){
        echo $titular.' Seu saldo atual: R$ '.$this->saldo;
    }

    function titular(){
        return $this->titular;
    }
}