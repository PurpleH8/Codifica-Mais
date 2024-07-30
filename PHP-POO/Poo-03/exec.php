<?php

/*
1. Crie uma interface chamada Funcionario. 
2. A interface deve ter métodos calcularSalario e exibirInformacoes. 
3. Crie uma classe FuncionarioBase que implemente a interface Funcionario 
e tenha propriedades protegidas nome e salarioBase. 



4. Crie uma classe FuncionarioHorista que herda de FuncionarioBase e 
sobrescreva o método calcularSalario para calcular o salário com base nas 
horas trabalhadas e na taxa por hora. Sobrescreva o método 
exibirInformacoes para exibir o nome e o salário calculado. 



5. Crie uma classe FuncionarioMensalista que herda de FuncionarioBase e 
sobrescreva o método calcularSalario para retornar o salário base. 
Sobrescreva o método exibirInformacoes para exibir o nome e o salário 
base. 





6. Crie objetos das classes FuncionarioHorista e FuncionarioMensalista, 
defina os valores necessários e chame os métodos calcularSalario e 
exibirInformacoes.
*/

interface Funcionario{
    public function calcularSalario();
    public function exibirInformacoes();
}
abstract class FuncionarioBase implements Funcionario{
    protected string $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase){
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario(){}
    public function exibirInformacoes(){}
}

class FuncionarioHorista extends FuncionarioBase{
    private $horasTrabalhadas;
    private $taxaPH;

    public function __construct($nome, $salarioBase, $horasTrabalhadas, $taxaPH) {
        parent::__construct($nome, $salarioBase);
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->taxaPH = $taxaPH;
    }

    public function calcularSalario(){
        return $this->horasTrabalhadas * $this->taxaPH;
    }

    public function exibirInformacoes(){
        echo "Lista dos funcionários";
echo PHP_EOL;
        echo "nome: " . $this->nome . PHP_EOL;
echo PHP_EOL;
        echo "salário: " . $this->calcularSalario() . PHP_EOL;
        echo '-------------------------------------------------------------------------------' . PHP_EOL;
    }
}

class FuncionarioMensalista extends FuncionarioBase{
    public function calcularSalario() {
        return $this->salarioBase;
    }

    public function exibirInformacoes(){
        echo 'Informações' . PHP_EOL . PHP_EOL;
        echo 'Nome : ' . $this->nome . PHP_EOL;
echo PHP_EOL;
        echo 'Salario : ' . $this->salarioBase . PHP_EOL;
    }
}