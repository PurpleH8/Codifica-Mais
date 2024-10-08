<?php
    // Inicia a sessão

    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ . '/../src/helper.php';
    require_once __DIR__ . '/../src/produtos.php';

    use App\Controller\ProdutosController;
    
    $produto = new ProdutosController();

    $caminho = rtrim($_SERVER['PATH_INFO'], '/');
    
     if ($caminho == "/listar") {
        return $produto->listar();
    }
    
    if ($caminho == "/adicionar") {
         return $produto->criar();
    }

    if ($caminho == "/editar") {
         return $produto->editar();
    }
