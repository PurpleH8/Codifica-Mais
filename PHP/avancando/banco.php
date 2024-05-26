<?php

include 'funcoes.php';

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

// Depósitos e saques

// Depósitos e saques


// Remover conta
unset($contasCorrentes[123]);

// Exibir contas
echo "<ul>";
foreach ($contasCorrentes as $chave => $contas) {
    exibeConta($contas);
}
echo "</ul>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $chave => $contas) { ?>
        <dt>
            <h3><?= $contas['titular']; ?> - <?php echo $chave; ?>;</h3>
        </dt>
        <dd>
            saldo: <?= $contas['saldo']; ?>;
        </dd>
        <?php } ?>
</body>
</html>