<?php

//Exercicio 2:  Sistema de Gerenciamento de Produtos

class Produto{
    private string $nome;
    private float $preco;
    private float $quantidadeEstoque;

// Deve haver métodos públicos para alterar o preço, ajustar a quantidade em estoque e exibir os detalhes do produto.

    public function __construct($nome, $preco, $quantidadeEstoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }
    
    public function  alterarPreco($novoPreco){
        $this->preco = $novoPreco;
    }

    public function ajustarEstoque($quantidade){
        $this->quantidadeEstoque = $quantidade;
    }

    public function exibirDetalhes(){
        echo 'Produto: ' . $this->nome . PHP_EOL . 'Preço: ' . $this->preco . PHP_EOL . 'Quantidade: ' . $this->quantidadeEstoque . PHP_EOL;
    }

}