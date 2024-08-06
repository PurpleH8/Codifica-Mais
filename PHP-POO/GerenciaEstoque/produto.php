<?php 

require_once 'ProdutoInterface.php';

abstract class Produto implements ProdutoInterface {

protected $estoque;
protected $sku;
protected $nome;
protected $unidadeMedida;
protected $quantidade;
protected $preco;
protected $cor;

public function __construct($estoque , $sku, $nome, $unidadeMedida, $preco, $quantidade, $cor) {

    $this->estoque = $estoque;
    $this->sku = $sku;
    $this->nome = $nome;
    $this->unidadeMedida = $unidadeMedida;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
    $this->cor = $cor;
}

public function getNome() {

}

public function getSku() {

}

public function getPreco() {

}

public function getEstoque() {

}

public function getQuantidade() {

}

public function getUnidadeMedida() {

}

public function getCor() {

}

}