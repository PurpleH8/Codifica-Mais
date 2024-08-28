<?php

class Produto {
    private $id;
    private $nome;
    private $preco;

    
    public function listar() {
        echo PHP_EOL . "Listando produtos..." . PHP_EOL;
    }

    public function criar($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
        echo PHP_EOL . "Produto criado!" . PHP_EOL . PHP_EOL . PHP_EOL . "Nome: $nome" . PHP_EOL . PHP_EOL . "Preço: $preco" . PHP_EOL;
    }

    // Método para salvar o produto
    public function salvar() {
        // Código para salvar o produto
        echo "Produto salvo: $this->nome, Preço: $this->preco" . PHP_EOL;
    }

    // Método para editar um produto existente
    public function editar($id, $nome, $preco) {
        // Código para editar o produto
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        echo "Produto editado: ID: $id, Nome: $nome, Preço: $preco" . PHP_EOL;
    }

    // Método para atualizar um produto existente
    public function atualizar($id, $nome, $preco) {
        // Código para atualizar o produto
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        echo "Produto atualizado: ID: $id, Nome: $nome, Preço: $preco" . PHP_EOL;
    }

    // Método para deletar um produto
    public function deletar($id) {
        // Código para deletar o produto
        $this->id = $id;
        echo "Produto deletado: ID: $id" . PHP_EOL;
    }
}

// Exemplo de uso da classe Produto
$produto = new Produto();
$produto->criar("Produto 1", 100);
$produto->salvar();
$produto->listar();
$produto->editar(1, "Produto 1 Editado", 150);
$produto->atualizar(1, "Produto 1 Atualizado", 200);
$produto->deletar(1);