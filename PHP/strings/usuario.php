<?php

$nome = 'Tássio Barbosa';
$email = 'tassiobmoura@gmail.com';
$senha = 'gordogamer';
$posicaoDoArroba = strpos($email, '@'); //buscar a posição de '@' dp $email

echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

//strpos() mostra a posição da string

for ($i = 0; $i <= 9; $i++) {
    echo $senha[$i];
}
echo PHP_EOL;

list($nome, $sobrenome) = explode( ' ', $nome);

echo 'nome: ' . $nome . PHP_EOL;
echo 'sobrenome: ' . $sobrenome . PHP_EOL;

