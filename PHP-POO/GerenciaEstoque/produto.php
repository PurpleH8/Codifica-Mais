<?php 
require_once 'ProdutoPerecivel.php';
require_once 'ProdutoInterface.php';

 class Produto  {


protected $sku;
protected $nome;
protected $unidadeMedida;
protected $quantidade;
protected $preco;
protected $cor;
protected $dataValidade;

public function __construct($sku, $nome, $unidadeMedida, $preco, $quantidade, $cor) {


    $this->sku = $sku;
    $this->nome = $nome;
    $this->unidadeMedida = $unidadeMedida;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
    $this->cor = $cor;
}

public function getSku() {
    return $this->sku;
}
public function getNome() {
    return $this->nome;
}

public function getPreco() {
    return $this->preco;
}

public function getQuantidade() {
    return $this->quantidade;
}

public function setQuantidade($quantidade) {
    $this->quantidade = $quantidade;
}
public function getUnidadeMedida() {
    return $this->unidadeMedida;
}

public function getCor() {
    return $this->cor;
}

public function getDataValidade() {
    return $this->dataValidade;
}

}