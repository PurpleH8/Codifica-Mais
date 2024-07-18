<?php

class Conta{
    //definir dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valorASacar){
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        } else {
            $this->saldo -= $valorASacar;
        }
    }


    public function depositar(float $valorADepositar): void {

        if ($valorADepositar < 0) {
            echo "Valor precisa ser psitivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    
    }

    public function tranferir(float $valorATransferir, Conta $contaDestino): void 
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo não disponível.";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
}

