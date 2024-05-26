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

//mb_strtoupper deixa as letras maiusculas
function tclm(array &$contas) {
    $contas['titular'] = strtoupper($contas['titular']);
}

function exibeConta(array $contas)
{
    ['titular' => $titular, 'saldo' => $saldo] = $contas;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}