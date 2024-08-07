<?php

require_once 'produto.php';
require_once 'ProdutoInterface.php';

class ProdutoPerecivel extends Produto{
    
    protected $dataValidade;

    public function __construct ($sku, $nome, $preco, $quantidade, $dataValidade, $cor) {
        parent::__construct($sku, $nome, $preco, $quantidade, $cor);
        $this->dataValidade = $dataValidade;
        
    }

    public function getDataValidade() {
        return $this->dataValidade;
    }

   
}

