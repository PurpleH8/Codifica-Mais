<?php

require "/../src/ConexaoBD.php";
require "/../src/produtos.php";
require "/../src/Controller/ProdutosController.php";

$ProdutosController = new ProdutosController($pdo);
$ProdutosController->deletar($_POST['id']);

header("Location: listar.php");