<?php

//exercicio 1: Sistema de Gerenciamento de Contas Bancárias

class ContaBancaria{
    private float $numeroConta;
    private string $nomeTitular;
    private float $saldo;

    public function __construct($numeroConta, $nomeTitular, $saldo)
    {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }

    public function depositar($quantia){
        if ($quantia > 0) {
            $this->saldo += $quantia;
            echo "Carregamento ..." . PHP_EOL . "Depósito de R$ $quantia feito com sucesso na conta (" . $this->numeroConta . ').';
        } else {
            echo 'Depósito inválido...' . PHP_EOL . PHP_EOL . PHP_EOL . 'Verifique e tente novamente.';
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            echo "Carregamento ..." . PHP_EOL . "Saque de R$ $quantia feito com sucesso na conta (" . $this->numeroConta . ').';
        } else {
            'Saque inválido...' . PHP_EOL . PHP_EOL . PHP_EOL . 'Verifique o saldo e tente novamente.';
        }
    }



    public function exibirSaldo() {
        echo 'Saldo disponível na conta (' . $this->numeroConta . ") é de R$ $this->saldo";
    }
}