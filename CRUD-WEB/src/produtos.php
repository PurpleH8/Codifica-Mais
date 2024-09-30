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


    public function salvar() {
        
        echo "Produto salvo: $this->nome, Preço: $this->preco" . PHP_EOL;
    }


    public function editar($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        echo "Produto editado: ID: $id, Nome: $nome, Preço: $preco" . PHP_EOL;
    }

    public function atualizar($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        echo "Produto atualizado: ID: $id, Nome: $nome, Preço: $preco" . PHP_EOL;
    }

    public function deletar($id) {
        $this->id = $id;
        echo "Produto deletado: ID: $id" . PHP_EOL;
    }
}

