<?php

interface ProdutoInterface{
//SKU, nome, quantidade, unidade de medida e preço.

    public function getEstoque ();
    public function getSku ();
    public function getNome ();
    public function getUnidadeDeMedida ();
    public function getQuantidade ();
    public function getPreco ();
    public function getCor ();
}

