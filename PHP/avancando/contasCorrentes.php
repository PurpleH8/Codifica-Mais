<?php

$contasCorrentes = [$conta1, $conta2, $conta3];
$conta1 = [
    'titular' => 'Icaro',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Rafael', 
    'saldo' => 1250
];
$conta3 = [
    'titular' => 'Tassio', 
    'saldo' => 1400
];


for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}