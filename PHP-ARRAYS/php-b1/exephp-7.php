<?php

echo "Digite um número: ";
$numero = intval(fgets(STDIN));

echo "Tabela de multiplicação de " . $numero . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . PHP_EOL;
}
