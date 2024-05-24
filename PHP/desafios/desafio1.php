<?php
//executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100

for ($contador = 1; $contador <10; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . PHP_EOL;
    }
}