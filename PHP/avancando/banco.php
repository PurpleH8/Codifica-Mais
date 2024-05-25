<?php


$contasCorrentes = [
    123 => [
        'titular' => 'Icaro',
        'saldo' => 1000
    ], 
    321 => [
        'titular' => 'Rafael', 
        'saldo' => 1250
    ], 
    213 => [
        'titular' => 'Tassio', 
        'saldo' => 1400
    ]
];
$contasCorrentes[183] = [
    'titular' => 'Paloma', 
    'saldo' => 1500
];
$contasCorrentes[183]['saldo'] -= 100;

foreach ($contasCorrentes as $chave => $contas) {
    echo $chave . ' ' . $contas['titular'] . ' ' . $contas['saldo'] . PHP_EOL;
}