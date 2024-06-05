<?php


echo "Digite um número: ";
$numero = fgets(STDIN);

for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
    $resultado = $numero * $multiplicador;
    echo "$numero multiplicado por $multiplicador é igual a $resultado" . PHP_EOL;
}