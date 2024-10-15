<?php

$arquivo = fopen('arquivo.txt', 'w');

$linha = PHP_EOL . 'rap do minecraft';
fwrite($arquivo, $linha);
echo $linha;
fclose($arquivo);