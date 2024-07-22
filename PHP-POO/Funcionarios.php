<?php

// Sistema de Gerenciamento de Funcionários

class Funcionarios{
    private string $nome;
    private string $cargo;
    private float $salario;

    public function __construct($nome, $cargo, $salario){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
// métodos públicos para ajustar o salário, alterar o cargo e exibir os detalhes do funcionário.
    public function  ajustarSalario($novoSalario){
        if ($this->salario == $novoSalario){
            echo "Ajuste inválido.";
        } else {
            $this->salario = $novoSalario;
            echo 'Salário atualizado.';
        }
    }

    public function alterarCargo(string $novoCargo){
        $this->cargo = $novoCargo;
        echo "Cargo do funcionário $this->nome atualizado para $novoCargo";
    }

    public function  exibirDetalhes(){
        echo "Detalhes... \n \n \n Funcionário: $this->nome. \n Cargo: $this->cargo. \n Salário: R$ $this->salario";
    }

}