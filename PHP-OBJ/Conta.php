<?php

class Conta{
    //definir dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar): void {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        }
            $this->saldo -= $valorASacar;
    }


    public function depositar(float $valorADepositar): void {

        if ($valorADepositar < 0) {
            echo "Valor precisa ser psitivo";
            return;
        }
           $this->saldo += $valorADepositar;
        
    
    }

    public function tranferir(float $valorATransferir, Conta $contaDestino): void 
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo não disponível.";
            return;
        }
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        
    }
}

