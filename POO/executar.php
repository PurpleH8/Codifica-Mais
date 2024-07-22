<?php


require_once 'Carro.php';


$marca = readline("Digite a marca do carro: ");
$modelo = readline("Digite o modelo do carro: ");
$anoFab = (float) readline("Digite o ano de fabricação do carro: ");


$carro = new Carro($marca, $modelo, $anoFab);
$carro->interagir();


/* eu preferiri usar o terminal do php pq foi mais fácil para mim, e aparentemente não deu erros. vai saber */