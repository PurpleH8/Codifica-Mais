<?php

spl_autoload_register(function($className) {
    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

/*1. Criar uma Interface ProdutoInterface: 
o Defina uma interface que descreva os métodos que todas as 
classes de produtos devem implementar. Isso garantirá que 
todos os produtos do sistema sigam um "contrato" padrão. 
*/

/*Implementar a Interface em uma Classe Produto: 
o Crie uma classe base Produto que implemente a interface 
ProdutoInterface. Essa classe deve conter atributos e métodos 
básicos, como SKU, nome, quantidade, unidade de medida e 
preço
*/

interface ProdutoInterface{

}

