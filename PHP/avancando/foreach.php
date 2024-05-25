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
$contasCorrentes[132] = [
    'titular' => 'Paloma', 
    'saldo' => 1500
];
foreach ($contasCorrentes as $chave => $conta) {
    echo $chave . PHP_EOL;
}
