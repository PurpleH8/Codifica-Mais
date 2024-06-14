<?php

$elementos = array();
$somaDosElementos = 0;

echo "calcularei a soma de 5 números inteiros pares." . PHP_EOL;
for ($numero = 0; $numero <= 4; $numero++) {
  $elementos[$numero] = readline("Digite um número: ");
}

for ($numero = 0; $numero <= 4; $numero++) {
  if ($elementos[$numero] % 2 == 0) {
    $somaDosElementos += $elementos[$numero];
  }
}

echo "Soma dos números pares: " . $somaDosElementos . PHP_EOL;