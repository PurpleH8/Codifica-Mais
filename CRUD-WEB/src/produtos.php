<?php

class Produto {
    private $id;
    private $nome;
    private $sku;
    private $unidade_medida_id;
    private $valor;
    private $quantidade;
    private $categoria_id;

    public function __construct($id, $nome, $sku, $unidade_medida_id, $valor, $quantidade, $categoria_id){
        $this->id = $id;
        $this->nome = $nome;
        $this->sku = $sku;
        $this->$unidade_medida_id = $unidade_medida_id;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->categoria_id = $categoria_id;
    }

    public function getId(): int {
        return $this->id;
    }
    
    public function getNome(): string{
        return $this->nome;
    }
    public function getSku(): int{
        return $this->sku;
    }
    public function getUnidade_medida_id(): int{
        return $this->unidade_medida_id;
    }
    public function getValor(): int{
        return $this->valor;
    }
}

    /*
    public function listar() {
        echo PHP_EOL . "Listando produtos..." . PHP_EOL;
    }

    public function criar($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
        echo PHP_EOL . "Produto criado!" . PHP_EOL . PHP_EOL . PHP_EOL . "Nome: $nome" . PHP_EOL . PHP_EOL . "Preço: $preco" . PHP_EOL;
    }


    public function salvar() {
        
        echo "Produto salvo: $this->nome, Preço: $this->valor" . PHP_EOL;
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

*/