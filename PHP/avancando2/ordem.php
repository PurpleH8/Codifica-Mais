<?php

$notas = [
    ['aluno' => 'Rafael', 
    'nota' => 9], 
    ['aluno' => 'Icaro', 
    'nota' => 6],
    ['aluno' => 'Tassio', 
    'nota' => 8],
];

function ordemNotas(array $nota1, array $nota2): int
{
    return ($nota2['nota'] <=> $nota1['nota']);
}

usort($notas, callback:'ordemNotas');
var_dump($notas);