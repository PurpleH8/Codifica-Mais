<?php

namespace App\Controller;

class ProdutosController 

{

    public function listar() {
        require __DIR__ . "/../View/Produto/listagem.php";
    }
    public function editar() {
        require __DIR__ . "/../View/Produto/editarItem.php";
    }
    public function criar() {
        require __DIR__ . "/../View/Produto/adicionar.php";
    }
    /*criar
	editar;
	atualizar;
	deletar;
    */
}