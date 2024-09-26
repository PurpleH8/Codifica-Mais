<?php
    // Inicia a sessão

    require __DIR__ . "/../vendor/autoload.php";
    require __DIR__ . '/../src/helper.php';
    require __DIR__ . '/../src/Controller/ProdutosController.php';
    //require __DIR__ . '/../src/View/editar.php';

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

    // Redireciona para a página de listagem
    header('Location: listar.php');

?>