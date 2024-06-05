<?php

echo "Digite um número:" .PHP_EOL;
$i = fgets(STDIN) . PHP_EOL;

if ($i %2 !=0) {
    echo"$i número é ímpar";
 } else {
    echo "$i é par" . PHP_EOL;
 }