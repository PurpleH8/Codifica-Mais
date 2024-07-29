<?php

/*Herança: A classe Veiculo é a classe base e as classes Carro, Moto e Caminhao
herdam dela.
 Polimorfismo: As classes derivadas (Carro, Moto, Caminhao) implementam os 
métodos acelerar e frear de maneiras específicas, mas todas são tratadas 
como instâncias de Veiculo.
 Interface: A interface VeiculoInterface garante que todas as classes de 
veículos implementem os métodos acelerar, frear e exibirDetalhes.
 Classes e Métodos Abstratos: A classe Veiculo é abstrata e contém métodos 
abstratos que devem ser implementados nas classes derivadas.
 Namespaces: O código é organizado em namespaces para evitar conflitos de 
nomes.
 Autoload: O autoload é configurado para carregar as classes automaticamente*/


abstract class Veiculos{
    protected $nome;
    protected $marca;
    protected $modelo;
    protected $cor;

    public function __construct($nome, $marca, $modelo, $cor){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    public function ligar($nome){
        echo "o $this->nome ligou VROOOOMOMOMOMMOOOOMMMMMMMMMMMM-VROOPOOOOOOOOMMMMMVOROMORVMOMVISDNIUVBUS";
    }

}
require_once 'src/Veiculos;';



