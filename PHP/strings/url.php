<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo "XIIii sai fora";
}

echo PHP_EOL;

if (str_ends_with($url, 'br')) {
    echo 'É uma URL brasileira';
} else {
    echo 'link de gringo, hein';
}