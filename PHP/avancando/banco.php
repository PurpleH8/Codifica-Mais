<?php


function sacar(array $contas, float $valorASacar): array 
{
    if ($valorASacar > $contas['saldo']) {
        exibeMensagem("Você não pode sacar, pobretão(ona)");
    } else {
        $contas['saldo'] -= $valorASacar;
    }
    return $contas;
}


function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $contas,float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $contas['saldo'] += $valorADepositar;
    } else {
        exibeMensagem ("você não pode depositar, fih da mãe, sai fora");
    }
    return $contas;
}

$contasCorrentes = 
[
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
$contasCorrentes[183] = 
[
    'titular' => 'Paloma', 
    'saldo' => 1500
];

//depositos e saques

$contasCorrentes[321] = sacar
(
    $contasCorrentes[321], 509
);

$contasCorrentes[213] = sacar
(
    $contasCorrentes[213], 500
);

$contasCorrentes[213] = sacar
(
    $contasCorrentes[213], 1000
);

$contasCorrentes[123] = depositar
(
    $contasCorrentes[123], 900
);
$contasCorrentes[183] = depositar
(
    $contasCorrentes[183], 110
);
//depositos e saques

foreach ($contasCorrentes as $chave => $contas) 
{
    exibeMensagem("$chave $contas[titular] $contas[saldo]");
} 

 