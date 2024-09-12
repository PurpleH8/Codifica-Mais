<?php


namespace App\Controller;

class ProdutosController 

{

    public function listar()
    {
        $produtos =  $_SESSION['produtos'];

        require __DIR__ . "/../View/listar.php";
    }

     public function editar() {
        //echo 'ola';
         require __DIR__ . "/../View/editar.php";
    }
    public function criar() {
        //echo 'blz?';
         require __DIR__ . "/../View/adicionar.php";
    }
    public function deletar(): void {
        require __DIR__ . "/../View/deletar.php";
    }
   
}