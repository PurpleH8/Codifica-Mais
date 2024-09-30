<?php

/*
1. Crie uma interface chamada Animal. 
2. A interface Animal deve ter um método chamado fazerSom. 
3. Crie uma classe base Mamifero que implementa a interface Animal. 
4. A classe Mamifero deve ter uma propriedade protegida chamada nome e 
um método construtor que inicializa essa propriedade. 
5. Crie uma classe Cachorro que herda de Mamifero e sobrescreva o método 
fazerSom para retornar "Latido". 
6. Crie uma classe Gato que herda de Mamifero e sobrescreva o método 
fazerSom para retornar "Miau". 
7. Crie uma função chamada fazerAnimalEmitirSom que aceita um objeto do 
tipo Animal e chama o método fazerSom desse objeto. 
8. Crie objetos das classes Cachorro e Gato e passe-os para a função 
fazerAnimalEmitirSom. ]
*/

interface Animal{
    public function fazerSom();
}

abstract class Mamifero implements Animal{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Cachorro extends Mamifero{
    public function fazerSom(){
        return "o cachorro $this->nome latiu" . PHP_EOL . "AUAUAUAUAUAUAUAUAUAUAUAUAUAUAUAUUAUAUAUUAU" . PHP_EOL . PHP_EOL . PHP_EOL;
    }
}

class Gato extends Mamifero{
    public function fazerSom(){
        return "o gato $this->nome miou" . PHP_EOL . "MINHAAUUUUUUUUUUUUUUU" . PHP_EOL . PHP_EOL . PHP_EOL;
    }
}

function fazerAnimalEmitirSom($animal){
    echo $animal->fazerSom() . PHP_EOL;

}