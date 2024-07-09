<?php

echo 'Lerei um array de 5 elementos e imprimirei o array em ordem inversa' . PHP_EOL;

$elemento = []; 

for ($i = 0; $i < 5; $i++){
    echo "Digite o " . ($i + 1) . "° elemento: ";
    $elemento[] = trim(fgets(STDIN));
}
echo PHP_EOL;

for ($i = 4; $i >= 0; $i--){
    echo "O " . ($i + 1) . "º elemento da lista é: " . $elemento[$i] . PHP_EOL;
}

