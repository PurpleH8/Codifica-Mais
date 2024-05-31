<?php

echo 'Diz a sua idade' . PHP_EOL;

$idade = trim((fgets(STDIN)));

if ($idade >= 18 ) {
    echo "$idade aninhos? pode entrar, trabalhador" . PHP_EOL;
} else {
    echo "$idade? novo dms, sai fora, menor";
}