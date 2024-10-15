<?php
/*
toda essa função, o file get contents faz
$arquivo = fopen('arquivo.txt', 'r');
$tamanhoArquivo = filesize('arquivo.txt');
$ler = fread($arquivo, $tamanhoArquivo);
echo $ler;
fclose($arquivo);
*/
$ler = file('arquivo.txt');
var_dump($ler);