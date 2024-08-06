<?php

abstract class ProdutoPerecivel extends Produto{
    
    public $dataValidade;
    public $dataAtual;

    public function __construct ($dataValidade , $dataFabricacao , $dataAtual) {
        $this->dataValidade = $dataValidade;
        $this->dataAtual = $dataAtual;
    }

    //$dataAtual = new DateTime(date('Y-m-d'));
    //$dataValidade = new DateTime('2016-10-01');

}