<?php

$idade = 25;
if ($idade >= 18) {
    echo "você só pode entrar no cabaré se tiver mais de 18 anos" . PHP_EOL;
    echo 'pode entrar';
}

if ($idade < 18) {
    echo "você não tem 18 anos, então não pode entrar" . PHP_EOL;
    echo 'se ferre ai, menorzin';
}