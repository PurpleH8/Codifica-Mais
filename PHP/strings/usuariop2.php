<?php

$informacoes = 'Icaro Silva,18,1.72,pobre';


list($nome, $idade, $altura, $estadoFinanceiro) = explode( ',', $informacoes);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Idade: ' . $idade . PHP_EOL;
echo 'Altura: ' . $altura . PHP_EOL;
echo 'Estado Financeiro: ' . $estadoFinanceiro . PHP_EOL;